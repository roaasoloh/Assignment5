<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Assignment 5')</title>
    <link rel="icon" href="{{ asset('icon.png') }}" type="image/png">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    <nav class="bg-blue-600 p-4 text-white">
        <div class="container mx-auto">
            <a href="{{ route('students.index') }}" class="font-semibold text-3xl">Student Management</a>
        </div>
    </nav>

    <div class="flex-grow container mx-auto mt-8">
        <header class="mb-4">
            <h1 class="text-2xl font-bold pl-20">@yield('header')</h1>
        </header>

        <main class="mx-20 my-10">
            @yield('content')
        </main>
    </div>

    <footer class="bg-blue-600 text-white p-4">
        <div class="container mx-auto text-center">
            &copy; 2024 Assignment 5
        </div>
    </footer>

</body>
</html>
