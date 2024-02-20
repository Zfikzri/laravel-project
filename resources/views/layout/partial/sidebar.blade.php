<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK RUS Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>

<!-- navbar start -->
<header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
    <h1 class="text-white">DATSIS</h1>
    <!-- Authentication section -->
    @auth
    <div class="dropdown">
        <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome, {{ auth()->user()->name }}
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/homelog">Home</a></li>
            <li>
                <form method="post" action="/logout">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                </form>
            </li>
        </ul>
    </div>
    @endauth
</header>
<!-- navbar end -->

<!-- Main content area -->
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar start -->
        <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-dark">
            <div class="offcanvas-md offcanvas-end bg-dark" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
                <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto" style="height: 100vh; position: relative;">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/dashboard/index">
                                <i class="bi bi-house-door-fill text-light bi-lg"></i>
                                <span class="text-light">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/student/all">
                                <i class="bi bi-person-fill text-light"></i>
                                <span class="text-light">Students</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/class/all">
                                <i class="bi bi-building-fill text-light"></i>
                                <span class="text-light">Class</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Sidebar end -->

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
