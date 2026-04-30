<!-- Layout for admin access -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | @yield('title', 'My Portfolio')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>

    <div class="d-flex" style="min-height: 100vh;">

        <div class="bg-dark text-white p-3 d-flex flex-column" style="width: 250px;">
            <h4 class="text-center mb-4">Admin Panel</h4>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link text-white text-truncate">
                        <i class="bi bi-house-door me-2"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/info" class="nav-link text-white text-truncate">
                        <i class="bi bi-house-door me-2"></i>Manage Persional info
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/experience" class="nav-link text-white text-truncate">
                        <i class="bi bi-house-door me-2"></i>Manage Experince
                    </a>
                </li>
                <li>
                    <a href="/skill" class="nav-link text-white text-truncate">
                        <i class="bi bi-code-slash me-2"></i> Manage Skills
                    </a>
                </li>
                <li>
                    <a href="/project" class="nav-link text-white text-truncate">
                        <i class="bi bi-briefcase me-2"></i> Manage Projects
                    </a>
                </li>
                <li>
                    <a href="/education" class="nav-link text-white text-truncate">
                        <i class="bi bi-book me-2"></i> Manage Education
                    </a>
                </li>
            </ul>
            <hr>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-danger w-100">
                    <i class="bi bi-box-arrow-right me-2"></i> Logout
                </button>
            </form>
        </div>

        <div class="flex-grow-1 bg-light">
            <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom p-3 shadow-sm">
                <div class="container-fluid">
                    <span class="navbar-brand mb-0 h1">Welcome, {{ Auth::user()->name }}!</span>
                </div>
            </nav>

            <div class="p-4">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @yield('content')

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>