@extends('layout')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Edit Student</h1>


    <form action="{{ route('students.update', $student->id) }}" method="POST" class="bg-white p-4 shadow-sm rounded">
        @csrf
        @method('PUT')

   
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $student->name) }}" required>
        </div>

   
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" name="age" id="age" class="form-control" value="{{ old('age', $student->age) }}" required>
        </div>

 
        <div class="text-center">
            <button type="submit" class="btn btn-warning">Update Student</button>
            <a href="{{ route('students.index') }}" class="btn btn-secondary ms-2">Cancel</a>
        </div>
    </form>
</div>
@endsection
