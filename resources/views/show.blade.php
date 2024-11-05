@extends('layout')

@section('title', 'Document')

@section('content')
    <h1 class="text-2xl font-bold">{{ $student->name }}</h1>
    <p>Age: {{ $student->age }}</p>
    <a href="{{ route('students.index') }}" class="text-blue-600">Back to Student List</a>
@endsection