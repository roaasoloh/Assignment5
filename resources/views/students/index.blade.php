@extends('layout')

@section('title', 'Students')

@section('content')
<h2>Students</h2>

<!-- Search and Age Range Filters -->
<div class="mb-3">
    <input type="text" id="search" placeholder="Search students..." class="form-control mb-3">
</div>

<div class="mb-3">
    <label for="min-age" class="form-label">Min Age</label>
    <input type="number" id="min-age" placeholder="Min Age" class="form-control">
</div>

<div class="mb-3">
    <label for="max-age" class="form-label">Max Age</label>
    <input type="number" id="max-age" placeholder="Max Age" class="form-control">
</div>

<!-- Student Table -->
<table class="table mt-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
        </tr>
    </thead>
    <tbody id="student-table">
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->age }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- jQuery AJAX for Search and Age Range -->
<script>
   $(document).ready(function() {
    $('#search, #min-age, #max-age').on('keyup change', function() {
        let searchQuery = $('#search').val();
        let minAge = $('#min-age').val();
        let maxAge = $('#max-age').val();

        $.ajax({
            url: '{{ route("students.search") }}',
            type: 'GET',
            data: {
                search: searchQuery,
                min_age: minAge,
                max_age: maxAge
            },
            success: function(data) {
                $('#student-table').html(data); 
            },
           
        });
    });
});

</script>

@endsection
