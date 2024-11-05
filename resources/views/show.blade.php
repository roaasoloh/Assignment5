@extends('layout')

@section('title', 'Student Details')

@section('content')
<div class="bg-blue-600 text-white text-center py-4 mb-8">
    <h1 class="text-xl font-semibold">Student Management</h1>
</div>

<div class="bg-white p-6 rounded-lg max-w-md mx-auto border">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Student Details</h2>
    
    <div class="mb-4">
        <p class="text-lg font-semibold text-gray-800">Name: {{ $student->name }}</p>
        <p class="text-gray-600">Age: {{ $student->age }}</p>
    </div>

    <div class="flex justify-start">
        <a href="{{ route('students.index') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 focus:outline-none">
            Back to List
        </a>
    </div>
</div>
@endsection
