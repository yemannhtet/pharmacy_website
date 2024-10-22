<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yum Yum Pharmacy</title>
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/logo-text.png') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #111827;
            color: white;
            font-family: 'Arial', sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .signup-box {
            background-color: #1f2937;
            border-radius: 8px;
            display: flex;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
            max-width: 800px;
            width: 100%;
            height: 550px;
        }

        .left-section {
            padding: 20px;
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .left-section h2 {
            font-weight: bold;
            font-size: 1.45rem;
            margin-bottom: 10px;
        }

        .form-label {
            color: #60a5fa;
            font-size: 13px;
        }

        .form-control {
            background-color: #374151;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            margin-bottom: 5px;
            transition: background-color 0.3s;
        }

        .form-control:focus {
            background-color: #4b5563;
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(16, 185, 129, 0.25);
        }

        .btn-primary {
            background-color: #10b981;
            border: none;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #059669;
        }

        .right-section {
            background-color: #111827;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 0 8px 8px 0;
            width: 50%;
        }

        .right-section img {
            max-width: 90%;
            height: auto;
        }

        .sign-up {
            color: #60a5fa;
            text-decoration: underline;
        }

        .sign-up:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="signup-box">
        <!-- Left Section (Form) -->
        <div class="left-section">
            <h2>Sign Up</h2>
            <p class="mb-4">Create your account to get started.</p>
            <form class="user" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="KO KO" name="name" value="{{ old('name') }}" autocomplete="name">
                        @error('name')
                            <small class="invalid text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="user@gmail.com" name="email" value="{{ old('email') }}" autocomplete="email">
                        @error('email')
                            <small class="invalid text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="09-000-000-000" name="phone" value="{{ old('phone') }}" autocomplete="tel">
                        @error('phone')
                            <small class="invalid text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Yangon" name="address" value="{{ old('address') }}" autocomplete="address">
                        @error('address')
                            <small class="invalid text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" value="{{ old('password') }}" autocomplete="new-password">
                        @error('password')
                            <small class="invalid text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Confirm Password" name="password_confirmation" value="{{ old('password_confirmation') }}">
                        @error('password_confirmation')
                            <small class="invalid text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>
            <p class="mt-3">Already have an account? <a href="{{ route('userLogin') }}" class="sign-up">Log In</a></p>
        </div>

        <!-- Right Section (Illustration) -->
        <div class="right-section">
            <img src="{{ asset('admin/assets/images/logo-white.png') }}" alt="Illustration" style="width:350px;">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
