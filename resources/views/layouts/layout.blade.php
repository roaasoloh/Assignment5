<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Management')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
    <header class="bg-blue-600 text-white p-4">
        <nav>
            <a href="{{ route('students.index') }}" class="px-4">Home</a>
            <a href="{{ route('students.create') }}" class="px-4">Add Student</a>
        </nav>
    </header>

    <main class="container mx-auto my-8 p-4">
        @if(session('success'))
            <div class="bg-green-200 text-green-700 p-2 rounded">
                {{ session('success') }}
            </div>
        @endif
        @yield('content')
    </main>

    <footer class="bg-blue-600 text-white p-4 text-center">
        &copy; 2024 - Ahmad Sharara - Student Management
    </footer>
</body>
</html>
