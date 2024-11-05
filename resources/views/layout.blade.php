<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Management')</title>
    @vite('resources/css/app.css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body class="bg-white font-sans leading-normal tracking-normal flex flex-col min-h-screen">
    <header class="bg-gradient-to-r from-blue-500 to-blue-700 shadow-lg">
        <div class="container mx-auto flex justify-between items-center py-5 px-6">
            <div class="flex items-center space-x-2">
                <span class="text-white text-2xl">🎓</span>
                <a href="/">
                    <h1 class="text-white text-2xl font-semibold">Student Management System</h1>
                </a>
            </div>
            <nav class="flex items-center">
                <a href="/" class="text-white font-medium hover:bg-blue-600 transition py-2 px-4 rounded-lg">
                    Home
                </a>
            </nav>
        </div>
    </header>
    <main class="container mx-auto my-10 p-6 flex-grow">
        @yield('content')
    </main>
    <footer class="bg-gray-900 text-gray-400 py-3">
        <div class="container mx-auto text-center">
            <p>&copy; Mahmoud Batish 2024</p>
        </div>
    </footer>
</body>
@vite('resources/js/script.js')

</html>