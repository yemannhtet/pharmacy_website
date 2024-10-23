<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #2f3c48; /* Dark blue background */
            color: white;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .error-container {
            display: flex;
            align-items: center;
            max-width: 1000px;
        }
        .text-section {
            flex: 1;
            padding-right: 40px;
        }
        .text-section h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        .text-section p {
            margin-bottom: 2rem;
        }
        .btn-section a {
            width: 100px;
            margin: 0 10px;
        }
        .question-mark {
            flex: 1;
            text-align: right;
        }
        .question-mark img {
            max-width: 300px;
            height: auto;
        }
    </style>
</head>
<body>

<div class="error-container">
    <div class="text-section">
        <h1>Something's wrong here...</h1>
        <p>We can't find the page you're looking for. Check out our Help Center or head back to home.</p>
        <div class="d-flex btn-section">
            <a href="#" class="btn btn-outline-light">Help</a>
            <a href="#" class="btn btn-outline-light">Home</a>
        </div>
    </div>
    <div class="question-mark">
        <img src="{{asset('admin/assets/images/question-mark.svg')}}" alt="Question Mark Image">
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
