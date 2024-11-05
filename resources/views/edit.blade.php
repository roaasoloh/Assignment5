@extends('layout')

@section('title', 'Edit Student Details')

@section('content')
    <h1 class="my-4">Edit Student Details</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST" class="border p-4 rounded">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $student->name }}" required>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" class="form-control" value="{{ $student->age }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
