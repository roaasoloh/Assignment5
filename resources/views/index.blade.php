@extends('layout')

@section('content')
<div class="container my-5">
        <h2 class="text-center">Students List</h2>

        <!-- Search Form -->
        <form id="searchForm" class="row g-3 mb-4">
    <div class="col-md-4">
        <label for="searchName" class="form-label"></label>
        <input type="text" id="searchName" class="form-control" placeholder="Search By Name">
    </div>
    <div class="col-md-4">
        <label for="age" class="form-label"></label>
        <input type="number" id="age" class="form-control" placeholder="Filter By Age">
    </div>
    <div class="col-md-2 align-self-end">
        <button type="button" class="btn btn-primary" onclick="filterStudents()">Search</button>
    </div>
</form>


        <!-- Students Table -->
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody id="studentTableBody">
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function filterStudents() {
            $.ajax({
                url: '/students/filter',
                method: 'GET',
                data: {
                    name: $('#searchName').val(),
                    min_age: $('#minAge').val(),
                    max_age: $('#maxAge').val()
                },
                success: function(response) {
                    $('#studentTableBody').html(response);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    alert("An error occurred while filtering the students.");
                }
            });
        }
    </script>

@endsection
