@extends('layout')

@section('title', 'Students List')

@section('content')
    <h1 class="my-4">Students List</h1>
    
    <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add New Student</a>
    
    <div class="mb-3">
        <input type="text" id="search" class="form-control" placeholder="Search by name..." />
        <input type="number" id="age-filter" class="form-control mt-2" placeholder="Filter by age..." />
    </div>

    <table class="table table-bordered" id="students-table">
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
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Function to fetch and update the student list
        function fetchStudents(searchQuery = '', ageFilter = '') {
            $.ajax({
                url: '{{ route('students.index') }}',
                method: 'GET',
                data: {
                    search: searchQuery,
                    age: ageFilter
                },
                success: function(data) {
                    var rows = '';
                    $.each(data, function(index, student) {
                        rows += '<tr>' +
                                    '<td>' + student.name + '</td>' +
                                    '<td>' + student.age + '</td>' +
                                    '<td>' +
                                        '<a href="/students/' + student.id + '" class="btn btn-info btn-sm">Show</a>' +
                                        '<a href="/students/' + student.id + '/edit" class="btn btn-warning btn-sm">Edit</a>' +
                                        '<form action="/students/' + student.id + '" method="POST" style="display:inline;">' +
                                            '<input type="hidden" name="_method" value="DELETE">' +
                                            '<input type="hidden" name="_token" value="{{ csrf_token() }}">' +
                                            '<button type="submit" class="btn btn-danger btn-sm">Delete</button>' +
                                        '</form>' +
                                    '</td>' +
                                '</tr>';
                    });
                    $('#students-table tbody').html(rows);
                }
            });
        }

        // Initial fetch of students
        fetchStudents();

        // Search functionality
        $('#search').on('keyup', function() {
            var searchQuery = $(this).val();
            var ageFilter = $('#age-filter').val();
            fetchStudents(searchQuery, ageFilter);
        });

        // Age filter functionality
        $('#age-filter').on('change', function() {
            var ageFilter = $(this).val();
            var searchQuery = $('#search').val();
            fetchStudents(searchQuery, ageFilter);
        });
    });
</script>
@endsection
