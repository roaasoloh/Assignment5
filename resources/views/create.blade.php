@extends('layout')

@section('title', 'Add New Student')

@section('content')
    <h1 class="my-4">Add New Student</h1>
    <form action="{{ route('students.store') }}" method="POST" class="border p-4 rounded">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" required>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" class="form-control" placeholder="Age" required>
        </div>
        <button type="submit" class="btn btn-primary">Add New Student</button>
    </form>
@endsection
