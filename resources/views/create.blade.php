@extends('layout')

@section('title', 'Add New Student')

@section('content')
    <div class="card">
        <div class="card-header">
            Add New Student
        </div>
        <div class="card-body">
            <form action="{{ route('students.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter student name" required>
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" class="form-control" id="age" name="age" placeholder="Enter student age" required>
                </div>
                <button type="submit" class="btn btn-success">Add Student</button>
            </form>
        </div>
    </div>
@endsection
