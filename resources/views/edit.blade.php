@extends('layout')

@section('title', 'Edit Student')

@section('header', 'Edit Student')

@section('content')


<form action="{{ route('students.update', $student->id) }}" method="POST" class="border p-4 rounded">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ $student->name }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="age">Age</label>
        <input type="number" id="age" name="age" value="{{ $student->age }}" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success mt-3">Update</button>
    <a href="{{ route('students.index') }}" class="btn btn-secondary mt-3">Cancel</a>
</form>
@endsection