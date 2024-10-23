<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>YUMYUM Pharmacy Admin Dash Board</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/') }}">
    <link rel="stylesheet"
        href="{{ asset('admin/assets/vendors/ti-icons/css/themify-icons.css') }}assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css"> -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/logo-text.png') }}" />

    {{-- fonts awesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <a class="navbar-brand brand-logo me-5" href="index.html"><img
                        src="{{ asset('admin/assets/images/logo-text.png') }}" style="width:70px; height:auto;"
                        class="ms-3" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="#"><img src="assets/images/logo-text.png"
                        alt="logo" style="width:80px; height:auto;" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                <span class="input-group-text" id="search">
                                    <i class="icon-search"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now"
                                aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-bs-toggle="dropdown">
                            <i class="icon-bell mx-0"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="ti-info-alt mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted"> Just now </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="ti-settings mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted"> Private message </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="ti-user mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted"> 2 days ago </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            id="profileDropdown">
                            <img src="{{ asset('admin/assets/images/logo-text.png') }}" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-settings text-primary"></i> Settings </a>
                            <a class="dropdown-item">
                                <i class="ti-power-off text-primary"></i> Logout </a>
                        </div>
                    </li>
                    <li class="nav-item nav-settings d-none d-lg-flex">
                        <a class="nav-link" href="#">
                            <i class="icon-ellipsis"></i>
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('adminDashboard')}}">
                            <img src="{{ asset('admin/assets/images/dashboard-square-03-stroke-rounded.svg') }}"
                                alt="" style="width:18px;" class="me-2">
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <img src="{{ asset('admin/assets/images/product-loading-stroke-rounded.svg') }}"
                                alt="" style="width:18px;" class="me-2">
                            <span class="menu-title">Products</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="#"><img
                                            src="{{ asset('admin/assets/images/list.svg') }}" alt=""
                                            style="width:18px;" class="me-2">Product List</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('categoryList')}}"><img
                                            src="{{ asset('admin/assets/images/category.svg') }}" alt=""
                                            style="width:18px;" class="me-2">Category</a></li>
                                <li class="nav-item"><a class="nav-link" href="#"><img
                                            src="{{ asset('admin/assets/images/plus.svg') }}" alt=""
                                            style="width:18px;" class="me-2">Add Item</a></li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false"
                            aria-controls="form-elements">
                            <img src="{{ asset('admin/assets/images/payment.svg') }}" alt=""
                                style="width:18px;" class="me-2">
                            <span class="menu-title">Payments</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="form-elements">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="#"><img
                                            src="{{ asset('admin/assets/images/add-payment.svg') }}" alt=""
                                            style="width:18px;" class="me-2">Payment List</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false"
                            aria-controls="charts">
                            <img src="{{ asset('admin/assets/images/order.svg') }}" alt=""
                                style="width:18px;" class="me-2">
                            <span class="menu-title">Orders</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="charts">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="#"><img
                                            src="{{ asset('admin/assets/images/order-list.svg') }}" alt=""
                                            style="width:18px;" class="me-2">Orders List</a></li>
                                <li class="nav-item"><a class="nav-link" href="#"><img
                                            src="{{ asset('admin/assets/images/success-order.svg') }}" alt=""
                                            style="width:18px;" class="me-2">Success Orders</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false"
                            aria-controls="auth">
                            <img src="{{ asset('admin/assets/images/setting.svg') }}" alt=""
                                style="width:18px;" class="me-2">
                            <span class="menu-title">User Setting</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="auth">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="#"><img
                                            src="{{ asset('admin/assets/images/profile.svg') }}" alt=""
                                            style="width:18px;" class="me-2"> User Profile </a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="#"><img
                                            src="{{ asset('admin/assets/images/add-user.svg') }}" alt=""
                                            style="width:18px;" class="me-2"> Add User </a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="#"><img
                                            src="{{ asset('admin/assets/images/list-user.svg') }}" alt=""
                                            style="width:18px;" class="me-2"> User List</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="#"><img
                                            src="{{ asset('admin/assets/images/ban-user.svg') }}" alt=""
                                            style="width:18px;" class="me-2"> Banned Users </a>
                                </li>
                                <li class="nav-item">
                                    <form method="POST" action="{{ route('logout') }}" class="ms-2">
                                        @csrf

                                        <img src="{{ asset('admin/assets/images/logout.svg') }}" alt=""
                                            style="width:18px;" class="ms-2">
                                        <input type="submit" value="Logout" class="btn ms-2"
                                            style="background-color:#fff; color:#000;">
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </nav>
            <!-- partial -->
            @yield('content')
            @include('sweetalert::alert')

        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/chart.umd.js"></script>
    <script src="assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <!-- <script src="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script> -->
    <script src="assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
    <script src="assets/js/dataTables.select.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/template.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="assets/js/dashboard.js"></script>
    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
</body>

</html>
