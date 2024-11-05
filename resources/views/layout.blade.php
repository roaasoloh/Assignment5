<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #e0eafc, #cfdef3);
            color: #333;
        }
        h1 {
            color: #007bff;
            text-align: center;
            margin-top: 20px;
        }
        footer {
            background-color: #007bff;
            color: white;
        }
        .navbar-custom {
            background: linear-gradient(90deg, #6a11cb 0%, #2575fc 100%);
        }
        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: white; 
        }
        .navbar-custom .nav-link:hover {
            color: #ffcc00; 
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Student Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav "> 
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('students.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('students.create') }}">Add Student</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <main class="my-5">
            @yield('content')
        </main>
    </div>

    <footer class="bg-dark text-light py-3 mt-auto">
        <div class="container text-center">
            <p>&copy; 2024 Student Management. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
