@extends('layout')

@section('title', 'Edit Student')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Edit Student</h2>

        <form action="{{ route('students.update', $student->id) }}" method="POST" class="p-4 bg-white rounded shadow">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" value="{{ $student->name }}" required class="form-control">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" name="age" id="age" value="{{ $student->age }}" required min="1" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
