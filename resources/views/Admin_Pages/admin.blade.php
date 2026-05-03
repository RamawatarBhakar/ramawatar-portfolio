<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | @yield('title')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            margin: 0;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: #212529;
            transition: 0.3s;
            z-index: 1001;
        }

        /* Main */
        .main-content {
            margin-left: 250px;
            transition: 0.3s;
        }

        /* Overlay */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            z-index: 1000;
        }

        /* Mobile */
        @media (max-width: 768px) {

            .sidebar {
                left: -250px;
            }

            .sidebar.active {
                left: 0;
            }

            .main-content {
                margin-left: 0;
            }

            .overlay.active {
                display: block;
            }
        }
    </style>
</head>

<body>

    <!-- Overlay -->
    <div class="overlay" id="overlay" onclick="closeSidebar()"></div>

    <!-- Sidebar -->
    <div class="sidebar text-white p-3" id="sidebar">

        <!-- Close Button (Mobile) -->
        <div class="d-flex justify-content-between align-items-center mb-3 d-md-none">
            <h5>Menu</h5>
            <button class="btn btn-sm btn-light" onclick="closeSidebar()">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>

        <h4 class="text-center mb-4 d-none d-md-block">Admin Panel</h4>

        <ul class="nav flex-column">

            <li><a href="{{ route('dashboard') }}" class="nav-link text-white">Dashboard</a></li>
            <li><a href="/info" class="nav-link text-white">Personal Info</a></li>
            <li><a href="/experience" class="nav-link text-white">Experience</a></li>
            <li><a href="/skill" class="nav-link text-white">Skills</a></li>
            <li><a href="/project" class="nav-link text-white">Projects</a></li>
            <li><a href="/education" class="nav-link text-white">Education</a></li>

        </ul>

        <hr>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-danger w-100">Logout</button>
        </form>

    </div>

    <!-- Main Content -->
    <div class="main-content">

        <!-- Navbar -->
        <nav class="navbar bg-white shadow-sm px-3">

            <!-- Toggle Button -->
            <button class="btn btn-dark d-md-none" onclick="openSidebar()">
                <i class="bi bi-list"></i>
            </button>

            <span class="ms-2">Welcome, {{ Auth::user()->name }} 👋</span>

        </nav>

        <!-- Content -->
        <div class="container-fluid py-4">
            @yield('content')
        </div>

    </div>

    <!-- JS -->
    <script>
        function openSidebar() {
            document.getElementById("sidebar").classList.add("active");
            document.getElementById("overlay").classList.add("active");
        }

        function closeSidebar() {
            document.getElementById("sidebar").classList.remove("active");
            document.getElementById("overlay").classList.remove("active");
        }
    </script>

</body>

</html>