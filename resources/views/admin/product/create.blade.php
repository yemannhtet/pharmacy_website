@extends('admin.layouts.master')
@section('content')
    <style>
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .product-image-container {
            position: relative;
            background-color: #d1e0e0;
            border-radius: 10px;
            height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        .product-image-container img {
            max-width: 100%;
            max-height: 100%;
            object-fit: cover;
        }
        .btn-replace, .btn-remove {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            padding: 5px 10px;
            font-size: 0.85em;
            color: #fff;
            border-radius: 5px;
        }
        label {
            font-weight: 500;
            color: #495057;
        }
        .form-control {
            background-color: #ffffff;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }
 /* From Uiverse.io by vinodjangid07 */
.file-upload-form {
  width: fit-content;
  height: fit-content;
  display: flex;
  align-items: center;
  justify-content: center;
}
.file-upload-label input {
  display: none;
}
.file-upload-label svg {
  height: 50px;
  fill: rgb(82, 82, 82);
  margin-bottom: 20px;
}
.file-upload-label {
  cursor: pointer;
  background-color: #ddd;
  padding: 30px 70px;
  border-radius: 40px;
  border: 2px dashed rgb(82, 82, 82);
  box-shadow: 0px 0px 200px -50px rgba(0, 0, 0, 0.719);
}
.file-upload-design {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 5px;
}
.browse-button {
  background-color: rgb(82, 82, 82);
  padding: 5px 15px;
  border-radius: 10px;
  color: white;
  transition: all 0.3s;
}
.browse-button:hover {
  background-color: rgb(14, 14, 14);
}


    </style>
</head>
<body>

<div class="container my-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="d-flex justify-content-between align-items-center ">
            <a href="#" class="btn btn-primary">&larr; Back to List</a>
            <h5 class="ms-2">Add New Product</h5>
        </div>

        <div>

        </div>
    </div>
    <form action="#" method="post" enctype="multipart/form-data">
        @csrf
    <div class="row">
        <!-- Product Image Section -->
        <div class="col-md-4">
            <div class="card p-4">

                <label for="file" class="file-upload-label">
                    <div class="file-upload-design">
                    <svg viewBox="0 0 640 512" height="1em">
                        <path
                        d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z"
                        ></path>
                    </svg>
                    <p>Drag and Drop</p>
                    <p>or</p>
                    <span class="browse-button">Browse file</span>
                    </div>
                    <input id="file" type="file" />
                </label>
            </div>
        </div>

        <!-- General Information Section -->
        <div class="col-md-8">
            <div class="card p-4">
                <h6>General Information</h6>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="productName">Product Name</label>
                        <input type="text" class="form-control" id="productName" placeholder="Enter product name" name="name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="productType">Product Category</label>
                        <select class="form-select" id="productType">
                            <option>Moisturizer</option>
                            <!-- Add other options here -->
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="productMerk">Stock</label>
                        <input type="text" class="form-control" id="productMerk" placeholder="Scarlett Whitening" name="stock">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price" placeholder="Enter Your Price" name="price">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="description">Product Description</label>
                        <textarea class="form-control" id="description" placeholder="Description" name="description"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">

                        <input type="submit"class="btn btn-success text-white" value="Save Product">
                    </div>

            </div>
        </div>
    </div>
</form>

</div>

@endsection
