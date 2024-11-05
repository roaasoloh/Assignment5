@extends('layouts.layout')

@section('title', 'Edit Student')

@section('content')
    <h1 class="text-xl font-bold mb-4">Edit Student</h1>
    <form action="{{route('students.update', $student->id)}}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" value="{{$student->name}}" class="w-full p-2 border rounded" required>
        </div>

        <div>
            <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
            <input type="number" name="age" value="{{$student->age}}" class="w-full p-2 border rounded" required>
        </div>

        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Update</button>
    </form>
@endsection