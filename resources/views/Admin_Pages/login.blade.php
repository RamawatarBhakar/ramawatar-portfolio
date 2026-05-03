<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background: linear-gradient(135deg, #0f172a, #1e293b);
            min-height: 100vh;
        }

        .login-card {
            border-radius: 16px;
            overflow: hidden;
        }

        .form-control {
            border-radius: 10px;
        }

        .btn-custom {
            border-radius: 10px;
        }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center">

    <div class="container px-3">

        <div class="row justify-content-center">

            <!-- Responsive width -->
            <div class="col-12 col-sm-10 col-md-6 col-lg-4">

                <div class="card shadow-lg login-card">

                    <!-- Header -->
                    <div class="card-header text-center bg-dark text-white">
                        <h4 class="mb-0">Admin Login</h4>
                    </div>

                    <!-- Body -->
                    <div class="card-body p-4">

                        <!-- Error -->
                        @if ($errors->any())
                        <div class="alert alert-danger text-center">
                            {{ $errors->first() }}
                        </div>
                        @endif

                        <form method="POST" action="{{ url('/login') }}">
                            @csrf

                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label">
                                    <i class="fa fa-envelope me-2"></i>Email
                                </label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label class="form-label">
                                    <i class="fa fa-lock me-2"></i>Password
                                </label>
                                <input type="password" name="password" class="form-control" required>
                            </div>

                            <!-- Button -->
                            <button type="submit" class="btn btn-primary w-100 btn-custom">
                                Login
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>