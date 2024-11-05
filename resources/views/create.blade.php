@extends('layout')

@section('title', 'Add New Student')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Add New Student</h2>
        
        <form action="{{ route('students.store') }}" method="POST" class="p-4 bg-white rounded shadow">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter name" required class="form-control">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" name="age" id="age" placeholder="Enter age" required min="1" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Add Student</button>
        </form>
    </div>
@endsection
