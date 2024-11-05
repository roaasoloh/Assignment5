@extends('layout')

@section('title', 'Students List')

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<h1 class="mb-4">Students List</h1>
<a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add New Student</a>

<!-- Search and Filter Inputs -->
<div class="form-group">
    <input type="text" id="search" class="form-control" placeholder="Search by Name...">
    <input type="number" id="age_filter" class="form-control mt-2" placeholder="Filter by Age">
</div>

<table class="table table-striped table-bordered" id="students_table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->age }}</td>
            <td>
                <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">Show</a>
                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student?');">Delete</button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Ensure this is the only jQuery -->
<script>
    $(document).ready(function() {
        console.log("Document is ready");

        function fetchStudents() {
            var searchValue = $('#search').val();
            var ageValue = $('#age_filter').val();
            $.ajax({
                url: "{{ route('students.index') }}",
                type: "GET",
                data: {
                    search: searchValue,
                    age: ageValue
                },
                success: function(data) {
                    $('#students_table tbody').html(data);
                }
            });
        }

        $('#search').on('keyup', function() {
            console.log("Search input changed");
            fetchStudents();
        });

        $('#age_filter').on('keyup', function() {
            console.log("Age filter input changed");
            fetchStudents();
        });
    });
</script>
@endsection