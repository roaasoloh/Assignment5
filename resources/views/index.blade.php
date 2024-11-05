@extends('layout')

@section('content')
<h1>Students List</h1>
<a href="{{ route('students.create') }}">Add New Student</a>


<div>
    <input type="text" id="search" placeholder="Search by name" />
    <input type="number" id="age_from" placeholder="Age from" />
    <input type="number" id="age_to" placeholder="Age to" />
    <button id="filter">Filter</button>
</div>

<ul id="students-list">
    @foreach ($students as $student)
        <li id="student-{{ $student->id }}">
            {{ $student->name }} ({{ $student->age }})
            <a href="{{ route('students.show', $student->id) }}">Show</a>
            <a href="{{ route('students.edit', $student->id) }}">Edit</a>
            <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#filter').click(function() {
        const search = $('#search').val();
        const ageFrom = $('#age_from').val();
        const ageTo = $('#age_to').val();

        $.ajax({
            url: '{{ route("students.index") }}',
            type: 'GET',
            data: {
                search: search,
                age_from: ageFrom,
                age_to: ageTo
            },
            success: function(data) {
                $('#students-list').empty(); // Clear the current list
                data.students.forEach(student => {
                    $('#students-list').append(
                        `<li id="student-${student.id}">
                            ${student.name} (${student.age})
                            <a href="/students/${student.id}">Show</a>
                            <a href="/students/${student.id}/edit">Edit</a>
                            <form action="/students/${student.id}" method="POST" style="display:inline;">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit">Delete</button>
                            </form>
                        </li>`
                    );
                });
            },
            error: function(xhr) {
                console.error(xhr.responseText);
            }
        });
    });
});
</script>
@endsection
