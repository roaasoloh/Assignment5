@extends('layout')

@section('title', 'Edit Student')
@section('header', 'Edit Student')

@section('content')
    <div class="container">
        <h3>Edit Student Details</h3>
        
        <!-- Form for editing student details -->
        <form action="{{ route('students.update', $student->id) }}" method="POST" class="mt-4">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $student->name }}" required>
            </div>
            
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" id="age" name="age" class="form-control" value="{{ $student->age }}" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
