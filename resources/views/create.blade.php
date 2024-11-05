@extends('layout')

@section('title', 'Add New Student')

@section('header', 'Add New Student')

@section('content')
<div class="container mt-4">
    <form action="{{ route('students.index') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" name="age" id="age" class="form-control" placeholder="Age" required>
        </div>
        <button type="submit" class="btn btn-primary">Add New Student</button>
    </form>
</div>
@endsection
