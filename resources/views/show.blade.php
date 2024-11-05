@extends('layout')
@section('title', 'Student Details')
@section('header', 'Student Details')
@section('content')
    <div class="bg-white p-6 rounded shadow-md">
        <h2 class="text-xl font-semibold">{{ $student->name }}</h2>
        <p>Age: {{ $student->age }}</p>
        <a href="{{ route('students.index') }}" class="mt-4 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Back to Students List</a>
    </div>
@endsection
