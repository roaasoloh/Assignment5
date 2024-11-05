    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Management System</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-gray-100">

        <header class="bg-blue-600 text-white p-4">
            <h1 class="text-2xl font-bold">Student Management System</h1>
        </header>

        <nav class="bg-gray-800 text-white p-4">
            <ul class="flex gap-4">
                <li><a href="{{ route('students.index') }}" class="hover:bg-gray-600 px-2 py-1">Home</a></li>
                <li><a href="{{ route('students.create') }}" class="hover:bg-gray-600 px-2 py-1">Add Student</a></li>
            </ul>
        </nav>

        <main class="container mx-auto my-6">
            @yield('content')
        </main>

        <footer class="bg-gray-800 text-white p-4">
            <p>&copy; 2024 Student Management</p>
        </footer>

    </body>
    </html>
