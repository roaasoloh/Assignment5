@extends('layout')

@section('title', 'Student Details')

@section('content')
    <div class="card">
        <div class="card-header">
            Student Details
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $student->name }}</h5>
            <p class="card-text">Age: {{ $student->age }}</p>
            <a href="{{ route('students.index') }}" class="btn btn-primary">Back to Student List</a>
        </div>
    </div>
@endsection
