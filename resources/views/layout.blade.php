<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Management')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-white font-sans leading-normal tracking-normal flex flex-col min-h-screen">
    <!-- Header with Gradient and Shadow -->
    <header class="bg-gradient-to-r from-blue-500 to-blue-700 shadow-lg">
        <div class="container mx-auto flex justify-between items-center py-5 px-6">
            <!-- Logo and Title -->
            <div class="flex items-center space-x-2">
                <span class="text-white text-2xl">🎓</span>
                <h1 class="text-white text-2xl font-semibold">Student Management System</h1>
            </div>

            <!-- Navigation Links -->
            <nav class="flex items-center">
                <a href="/" class="text-white font-medium hover:bg-blue-600 transition py-2 px-4 rounded-lg">
                    Home
                </a>
            </nav>
        </div>
    </header>

    <!-- Main Content Area with Enhanced Styling -->
    <main class="container mx-auto my-10 p-6 flex-grow">
        @yield('content')
    </main>

    <!-- Footer with Improved Layout and Less Padding -->
    <footer class="bg-gray-900 text-gray-400 py-3">
        <div class="container mx-auto text-center">
            <p>&copy; Mahmoud Batish 2024</p>
        </div>
    </footer>
</body>

</html>