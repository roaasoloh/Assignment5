@extends('layouts.layout')

@section('content')
<div class="container mx-auto mt-6">
    <form action="{{ route('students.store') }}" method="POST" class="p-6 bg-gray-100 rounded-lg shadow-md">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name</label>
            <input type="text" id="name" name="name" class="w-full p-2 border rounded" required>
        </div>

        <div class="mb-4">
            <label for="age" class="block text-gray-700">Age</label>
            <input type="number" id="age" name="age" class="w-full p-2 border rounded" required>
        </div>

        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Add Student</button>
    </form>
</div>
@endsection
