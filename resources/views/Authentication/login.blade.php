<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yum Yum Login</title>
    <link rel="shortcut icon" href="{{asset('admin/assets/images/logo-text.png')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #111827;
            color: white;
            font-family: 'Arial', sans-serif;
            height: 100vh;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-box {
            background-color: #1f2937;
            border-radius: 8px;
            display: flex;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
        }

        .left-section {
            padding: 40px;
            max-width: 400px;
        }

        .left-section h2 {
            font-weight: bold;
            font-size: 1.5rem; /* Slightly smaller */
        }

        .form-label {
            color: #60a5fa;
            font-size: 0.9rem; /* Slightly smaller */
        }

        .form-control {
            background-color: #374151;
            color: #ffffff;
            border: none;
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #10b981;
            border: none;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
        }

        .btn-primary:hover {
            background-color: #059669;
        }

        .forgot-password,
        .sign-up {
            color: #60a5fa;
        }

        .forgot-password:hover,
        .sign-up:hover {
            text-decoration: underline;
        }

        .right-section {
            background-color: #111827;
            padding: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 0 8px 8px 0;
        }

        .right-section img {
            max-width: 100%;
            height: auto;
        }

        .social-btn {
            width: 48%;
            height: auto;
            font-size: 13px;
        }

        .social-btn i {
            margin-right: 8px; /* Space between icon and text */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login-box">
            <div class="left-section">
                <h2>Welcome!</h2>
                <p>Log in to your account to begin.</p>

                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email"
                                    class="form-control
                                            @error('email')
                                                is-invalid
                                              @enderror"
                                     id="email"
                                     placeholder="user@gmail.com"
                                     name="email"
                                    value="{{ old('email') }}">
                                 @error('email')
                                    <small class="is-invalid text-danger">{{ $message }}</small>
                                @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password"
                                    class="form-control
                                     @error('password')
                                                is-invalid
                                              @enderror"
                                    id="password"
                                    placeholder="Password"
                                    name="password">
                        @error('password')
                        <small class="is-invalid text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <a href="#" class="forgot-password">Forgot password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary">Log In</button>
                </form>

                    <div class="d-flex justify-content-between mt-3">
                        <a href="{{ url('auth/google/redirect')}}" class="btn btn-primary social-btn">
                            <i class="fab fa-google"></i> Login with Google
                        </a>
                        <a  href="{{ url('auth/github/redirect')}}" class="btn btn-dark social-btn">
                            <i class="fab fa-github"></i> Login with GitHub
                        </a>
                    </div>

                <p class="mt-3">Don't have an account? <a href="{{route('userRegister')}}" class="sign-up">Sign up</a></p>
            </div>

            <div class="right-section">
                <img src="{{asset('admin/assets/images/login.png')}}" alt="Illustration" style="width: 400px;">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
