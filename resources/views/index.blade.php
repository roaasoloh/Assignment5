@extends('layout')

@section('title', 'Students List')

@section('content')
<h1 class="mb-4 text-center">Students List</h1>
<div class="mb-3">
    <input type="text" id="search" class="form-control" placeholder="Search by name">
    <input type="number" id="age" class="form-control mt-2" placeholder="Filter by age">
    <button id="search-btn" class="btn btn-primary mt-2">Search</button>
</div>
<a href="{{ route('students.create') }}" class="btn btn-success mb-3">Add New Student</a>
<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="student-list">
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->age }}</td>
                <td class="d-flex">
                    <a href="{{ route('students.show', $student->id) }}" class="btn btn-primary btn-sm me-2">Show</a>
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm me-2">Edit</a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this student?')">
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
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#search-btn').click(function() {
            $.ajax({
                url: "{{ route('students.index') }}",
                type: "GET",
                data: {
                    search: $('#search').val(),
                    age: $('#age').val()
                },
                success: function(data) {
                    $('#student-list').html(data);
                },
                error: function() {
                    alert('Something went wrong');
                }
            });
        });
    });
</script>
@endsection
