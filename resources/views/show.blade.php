@extends('layout')

@section('title', 'Student Details')

@section('content')
<h1 class="mb-4">Student Details</h1>

<div class="border p-4 rounded">
    <h3>{{ $student->name }}</h3>
    <p><strong>Age:</strong> {{ $student->age }}</p>
</div>

<a href="{{ route('students.index') }}" class="btn btn-secondary mt-3">Back to List</a>
@endsection