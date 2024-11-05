<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Student Details</title>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
<div class="fixed top-0 left-0 w-full z-10">
        @include('navbar')
    </div>
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">{{$student->name}}</h1>
        <p class="text-lg text-gray-600 mb-6">Age: <span class="font-semibold text-gray-800">{{$student->age}}</span></p>
        <div class="flex justify-center">
            <a href="{{route('students.index')}}" class="inline-flex items-center justify-center bg-blue-500 text-white font-semibold py-2 px-6 rounded-lg shadow hover:bg-blue-600 transition duration-200">
                Back to Student List
            </a>
        </div>
    </div>
    <div class="fixed bottom-0 left-0 w-full z-10">
        @include('footer')
    </div>
</body>
</html>
