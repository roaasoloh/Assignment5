<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="bg-gray-100 flex flex-col items-center justify-center min-h-screen">
<div class="fixed top-0 left-0 w-full z-10">
        @include('navbar')
    </div>
    <div class="bg-white shadow-lg rounded-lg p-6 max-w-md w-full">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Update Student</h1>
        <form action="{{route('students.update', $student->id)}}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label for="name" class="block text-gray-700 font-semibold mb-1">Name</label>
                <input type="text" name="name" id="name" value="{{$student->name}}" required class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="age" class="block text-gray-700 font-semibold mb-1">Age</label>
                <input type="number" name="age" id="age" value="{{$student->age}}" required class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white font-semibold py-2 rounded hover:bg-blue-600 transition duration-200">Update</button>
        </form>
    </div>
    <div class="fixed bottom-0 left-0 w-full z-10">
        @include('footer')
    </div>)
</body>
</html>
