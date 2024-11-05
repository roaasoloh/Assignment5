<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
    <style>
        html, body {
            height: 100%; 
            margin: 0; 
        }
        body {
            display: flex; 
            flex-direction: column; 
        }
        main {
            flex: 1;
        }
    </style>
</head>
<body class="bg-gray-100">
    <header>
        <nav class="bg-blue-600 p-4 text-white flex justify-between items-center">
            <div class="text-lg font-bold">Navigation</div>
            <div>
                <a href="{{ route('index') }}" class="text-white hover:bg-blue-700 px-3 py-2 rounded">Home</a>
                <a href="{{ route('students.create') }}" class="text-white hover:bg-blue-700 px-3 py-2 rounded">Add Student</a>
                <a href="{{ route('students.index') }}" class="text-white hover:bg-blue-700 px-3 py-2 rounded">Student List</a>
            </div>
        </nav>
    </header>

    <main class="container mx-auto py-8">
        @yield('content')
    </main>

    <footer class="bg-blue-600 text-center py-4 text-white">
        <p>&copy; 2024 Student Management</p>
    </footer>
</body>
</html>
