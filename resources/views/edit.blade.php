@extends('layout')

@section('title', 'Edit Student')

@section('header', 'Edit Student')

@section('content')
    <div class="bg-white p-8 rounded shadow-md max-w-md w-full mx-auto">
        <form action="{{ route('students.update', $student->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <input type="text" name="name" value="{{ $student->name }}" required
                    class="w-full p-2 border border-gray-300 rounded" placeholder="Student Name">
            </div>
            <div>
                <input type="number" name="age" value="{{ $student->age }}" required
                    class="w-full p-2 border border-gray-300 rounded" placeholder="Student Age">
            </div>
            <button type="submit" class="w-full bg-brown-600 text-white p-2 rounded hover:bg-brown-400">Update</button>
        </form>

        <a href="{{ route('students.index') }}" class="mt-4 inline-block text-brown-700 hover:underline">Back to Student
            List</a>
    </div>

@endsection
