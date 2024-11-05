<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Management System')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('index') }}">Student Management</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('create') }}">Add Student</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('index') }}">Students List</a>
            </li>
        </ul>
    </div>
</nav>

    <div class="container mt-4">
        @yield('content') <!-- Content Section -->
    </div>
    <footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="text-muted">Affordable Excellence in Education - Fall 2024</span>
    </div>
</footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
