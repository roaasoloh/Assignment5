<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav class="bg-gray-800 p-4">
            <ul class="flex space-x-4 text-white">
                <li><a href="/" class="hover:underline">Home</a></li>
                <li><a href="/students" class="hover:underline">Students</a></li>
                <!-- Add other navigation links here -->
            </ul>
        </nav>
    </header>

    <main class="p-4">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white p-4 text-center">
        © 2024 Affordable Excellence in Education
    </footer>
</body>
</html>
<form class="bg-gray-200 p-6 rounded">
  <label class="block mb-2">
    Name:
    <input type="text" class="mt-1 block w-full p-2 border border-gray-300 rounded" />
  </label>
  <label class="block mb-2">
    Age:
    <input type="number" class="mt-1 block w-full p-2 border border-gray-300 rounded" />
  </label>
  <button type="submit" class="mt-4 bg-blue-500 text-white p-2 rounded">Submit</button>
</form>
