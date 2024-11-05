@extends('layout') 

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Students List</h1>

 
    <form method="GET" action="{{ route('students.index') }}" class="mb-4">
        <div class="row">
            <div class="col-md-4">
                <input type="text" name="search" class="form-control" placeholder="Search by name" value="{{ request()->search }}">
            </div>
            <div class="col-md-4">
                <input type="number" name="age" class="form-control" placeholder="Filter by age" value="{{ request()->age }}">
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary w-100">Search</button>
            </div>
        </div>
    </form>

   
    <div class="text-end mb-3">
        <a href="{{ route('students.create') }}" class="btn btn-success">Add New Student</a>
    </div>

   
    @include('students._student_list', ['students' => $students])
</div>
@endsection
