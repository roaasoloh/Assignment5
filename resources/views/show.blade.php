@extends('layout')

@section('title', 'Student Details')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">{{ $student->name }}</h2>
        
        <div class="card p-4 bg-white shadow">
            <p><strong>Age:</strong> {{ $student->age }}</p>
        </div>

        <div class="mt-4">
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to Student List</a>
        </div>
    </div>
@endsection
