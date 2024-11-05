@extends('layout')

@section('title', 'Add New Student')

@section('content')
<h1 class="mb-4">Add New Student</h1>
<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <div class="form-group mb-3">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter name" required>
    </div>
    <div class="form-group mb-3">
        <label for="age">Age</label>
        <input type="number" name="age" class="form-control" placeholder="Enter age" required>
    </div>
    <button type="submit" class="btn btn-primary">Add New Student</button>
</form>
@endsection
