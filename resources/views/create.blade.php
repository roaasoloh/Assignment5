@extends('layout')

@section('title', 'Add New Student')

@section('content')
<h1 class="mb-4">Add New Student</h1>

<form action="{{ route('students.store') }}" method="POST" class="border p-4 rounded">
    @csrf

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Enter student's name" required>
    </div>

    <div class="form-group">
        <label for="age">Age</label>
        <input type="number" id="age" name="age" class="form-control" placeholder="Enter student's age" required>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Add New Student</button>
    <a href="{{ route('students.index') }}" class="btn btn-secondary mt-3">Cancel</a>
</form>
@endsection