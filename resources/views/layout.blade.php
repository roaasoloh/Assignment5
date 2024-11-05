<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Management')</title>
    @vite('resources/css/app.css') <!-- Ensure Tailwind CSS is loaded -->

    <style>
        /* Full Hanging Sign Style */
        .header-sign-container {
            display: flex;
            justify-content: center;
        }

        .header-sign {
            background-image: url('{{ asset('images/hanging-sign2.png') }}');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            width: 100%;
            max-width: 400px;
            /* Adjust this width as necessary to fit your design */
            height: 220px;
            /* Set height to    show the full image */
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            font-weight: bold;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
        }

        nav,
        footer {
            background-color: #8B5E3C;
            /* Matching the brown color of the sign */
        }
    </style>
</head>

<body class="bg-gray-100 flex flex-col min-h-screen">

    <!-- Navbar -->
    <nav class="bg-brown-900  text-white p-4 h-24 content-center">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-bold">Student Management</h1>
            <a href="{{ route('students.create') }}" class="text-white bg-brown-600 hover:bg-brown-400 px-4 py-2 rounded">
                Create Student
            </a>
        </div>
    </nav>

    <!-- Header -->
    <header class="header-sign-container -mb-8">
        <div class="header-sign ">
            @yield('header')
        </div>
    </header>
    <main class="container mx-auto p-8 flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-brown-900 text-white py-4 h-24 flex items-end">
        <div class="container mx-auto text-center">
            <p class="self-end">&copy; 2024 Jamal Hamd | Senior CS Student.</p>
        </div>
    </footer>

</body>

</html>
