<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
      
        .custom-header {
            background-color: #007bff; 
            color: white;
            height: 80px;
        }

        .custom-footer {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 1rem 0;
            margin-top: auto; 
        }

       
        html, body {
            height: 100%;
        }

        .content-wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh; 
        }

        .navbar-brand {
            text-align: center;
            width: 100%; 
        }
    </style>
</head>
<body class="d-flex flex-column">
    <div class="content-wrapper">
       
        <nav class="navbar navbar-expand-lg custom-header">
            <div class="container-fluid justify-content-center">
                <a class="navbar-brand" href="/">Student Management</a>
            </div>
        </nav>

       
        <main class="container my-4">
            @yield('content')
        </main>

       
        <footer class="custom-footer">
            &copy; 2024 Student Management
        </footer>
    </div>
</body>
</html>