@extends('layout')

@section('title', 'Student Details')

@section('content')
    <h1 class="my-4">{{ $student->name }}</h1>
    <p><strong>Age:</strong> {{ $student->age }}</p>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to Student List</a>
@endsection
