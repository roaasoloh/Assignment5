@extends('layout')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Add New Student</h1>

  
    <form action="{{ route('students.store') }}" method="POST" class="bg-white p-4 shadow-sm rounded">
        @csrf

   
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter student's name" required>
        </div>

   
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" name="age" id="age" class="form-control" placeholder="Enter student's age" required>
        </div>

   
        <div class="text-center">
            <button type="submit" class="btn btn-success">Add New Student</button>
            <a href="{{ route('students.index') }}" class="btn btn-secondary ms-2">Cancel</a>
        </div>
    </form>
</div>
@endsection
