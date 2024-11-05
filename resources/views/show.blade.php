@extends('layout')

@section('title', 'Student Details')

@section('header', $student->name)

@section('content')
    <div class="bg-white p-6 rounded shadow-md max-w-md mx-auto">
        <h2 class="text-2xl font-bold mb-4">{{ $student->name }}</h2>
        <p class="text-gray-700 mb-4">Age: {{ $student->age }}</p>
        <a href="{{ route('students.index') }}" class="inline-block bg-brown-600 text-white py-2 px-4 rounded hover:bg-brown-400">Back to Student List</a>
    </div>
@endsection
