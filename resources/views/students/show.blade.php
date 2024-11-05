@extends('layout')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Student Details</h1>


    <div class="card">
        <div class="card-body">
            <h3>{{ $student->name }}</h3>
            <p>Age: {{ $student->age }}</p>
            <div class="text-end">
                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                </form>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
</div>
@endsection
