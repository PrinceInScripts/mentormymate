<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Login Form</title>
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* Center the form vertically and horizontally */
        html, body {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f4f4f9;
        }

        .login-form {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            width: 400px;
        }

        .btn-google {
            background-color: #db4437;
            color: white;
        }

        .btn-apple {
            background-color: black;
            color: white;
        }

        .or-separator {
            text-align: center;
            margin: 20px 0;
            font-weight: bold;
        }

        .form-label {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login-form">
            <h1 class="text-center mb-4">Login</h1>
            <form>
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i> <!-- Email Icon -->
                            </span>
                        </div>
                        <input type="email" class="form-control" placeholder="Enter your Email">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Password</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i> <!-- Lock/Password Icon -->
                            </span>
                        </div>
                        <input type="password" class="form-control" placeholder="Enter your Password">
                    </div>
                </div>

                <div class="form-group form-check d-flex justify-content-between">
                    <div>
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <a href="#" class="text-primary">Forgot password?</a>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Sign In</button>

                <p class="text-center mt-3">Don't have an account? <a href="#" class="text-primary">Sign Up</a></p>

                <div class="or-separator">Or With</div>

                <div class="d-flex justify-content-between">
                    <button class="btn btn-google btn-block mr-2">
                        <i class="fab fa-google"></i> Google
                    </button>
                    <button class="btn btn-apple btn-block">
                        <i class="fab fa-apple"></i> Apple
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap 4 JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
