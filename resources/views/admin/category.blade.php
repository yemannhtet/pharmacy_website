@extends('admin.layouts.master')
@section('content')

    <style>
        .category-card {
            margin-top:30px;
            background-color: #f9f9f9;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .category-card h5 {
            font-weight: 600;
        }

        .btn-add-category:hover {
            background-color: #82a650;
        }
        table {
            background-color: white;
            border-radius: 12px;

            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);

        }
        .table th, .table td {
            vertical-align: middle;
        }
        .badge {
            border-radius: 15px;
            padding: 10px 15px;
            font-size: 0.9rem;
            color: red;
        }
        .page-item,
        .page-link{
            color:#706d6d;
            border-color:#e8ecef;
        }
        .page-link.active, .active > .page-link  {
           background-color:#97bc62 ;
           color:#fff ;
           border-color:#e8ecef;
        }
        p{
            display: none;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row mb-4">
        <!-- Category Card -->
        <div class="col-md-6">
            <div class="category-card">
                <h5>Category</h5>
                <div class="mb-3">
                        <form action="{{route('categoryCreate')}}" method="POST">
                            @csrf
                            <label for="product-category" class="form-label">Product Category</label>
                            <input type="text" class="form-control" id="product-category" placeholder="Type your category here" name="category" value="{{old('category')}}">
                        </div>
                        <button class="btn btn-primary" type="submit">Add Category</button>
                        </form>
            </div>
        </div>

    </div>

    <!-- Tags Table -->
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as  $category)
            <tr>
                <td>{{ $category->id}}</td>
                <td>{{ $category->name}}</td>
                <td>
                    <a href="{{ route('categoryDelete',$category->id) }}" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></i></a>
                </td>
            </tr>
            @endforeach



        </tbody>
    </table>
    <span class="d-flex justify-content-end mt-3">
        {{ $data->links('pagination::bootstrap-5') }}
    </span>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

@endsection

