@extends('layout')
@section('title', 'Page Title')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container">
        <h1>Students List</h1>
        <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add New Student</a>

        <div class="mb-3">
            <input type="text" id="search" class="form-control" placeholder="Search by name...">
            <label for="ageFilter" class="mt-2">Age Filter:</label>
            <div class="d-flex mb-2">
                <input type="number" id="minAge" class="form-control me-2" placeholder="Min Age" style="width: 120px;">
                <input type="number" id="maxAge" class="form-control me-2" placeholder="Max Age" style="width: 120px;">
                <button id="filterButton" class="btn btn-secondary">Filter</button>
            </div>
        </div>

        <table class="table" id="studentsTable">
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
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            function fetchStudents(query = '', minAge = '', maxAge = '') {
                $.ajax({
                    url: "{{ route('students.search') }}", 
                    method: 'GET',
                    data: {
                        search: query,
                        min_age: minAge,
                        max_age: maxAge
                    },
                    success: function(data) {
                        $('#studentsTable tbody').html(data); 
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText); 
                    }
                });
            }

            $('#search').on('keyup', function() {
                var searchQuery = $(this).val();
                var minAge = $('#minAge').val();
                var maxAge = $('#maxAge').val();
                fetchStudents(searchQuery, minAge, maxAge);
            });

            $('#filterButton').on('click', function() {
                var searchQuery = $('#search').val();
                var minAge = $('#minAge').val();
                var maxAge = $('#maxAge').val();
                fetchStudents(searchQuery, minAge, maxAge);
            });
        });
    </script>
</body>
</html>
@endsection