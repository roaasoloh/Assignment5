<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Students Management')</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f8f9fa;
        }
        footer {
            background-color: #343a40;
            color: white;
            margin-top: auto; /* Push footer to the bottom */
        }
        .navbar-brand {
            font-weight: bold;
            color: #007bff !important;
        }
        .navbar-nav .nav-link {
            margin-right: 15px;
            font-weight: 500;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 40px 0;
        }
        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 0;
        }
        .container {
            margin-top: 30px;
            flex: 1; /* Allow the container to grow */
        }
        .student-card {
            transition: transform 0.3s;
        }
        .student-card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('students.index') }}">Student Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('students.index') }}">Students List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('students.create') }}">Add Student</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="header text-center">
        <h1>@yield('header', 'Welcome to Student Management')</h1>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer class="text-center py-4">
        <p>Copyright &copy; {{ date('Y') }} Your Application Name. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoZoaO6XbKGNGqPqikmfIt2t4DaDiVfApS2tY5PgzPEAn3a" crossorigin="anonymous"></script>
</body>
</html>
