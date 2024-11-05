@extends('layout')

@section('title', '{{ $student->name }}')

@section('content')
<div class="flex items-center justify-center">
    <div class="bg-white p-10 rounded-xl shadow-md w-full max-w-lg">
        <h1 class="text-4xl font-extrabold text-gray-900 mb-8 text-center">Student Details</h1>

        <div class="text-left mb-6">
            <label class="block text-gray-400 text-xs uppercase tracking-wide font-bold mb-1">Name</label>
            <p class="text-2xl text-gray-800">{{ $student->name }}</p>
        </div>

        <div class="text-left mb-8">
            <label class="block text-gray-400 text-xs uppercase tracking-wide font-bold mb-1">Age</label>
            <p class="text-2xl text-gray-800">{{ $student->age }} years old</p>
        </div>

        <div class="text-center">
            <a href="{{ route('students.index') }}"
                class="inline-block bg-blue-600 text-white px-8 py-3 rounded-full shadow-md hover:bg-blue-700 transition-transform transform hover:scale-105">
                Back to Student List
            </a>
        </div>
    </div>
</div>
@endsection