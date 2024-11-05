@extends('layouts.layout')

@section('title', 'Students List')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Students List</h1>

    <form id="search-form" class="mb-4">
        <input type="text" name="search" placeholder="Search by name" class="border p-2">
        <input type="number" name="age_min" placeholder="Min age" class="border p-2">
        <input type="number" name="age_max" placeholder="Max age" class="border p-2">
        <button type="submit" class="bg-blue-600 text-white px-4 py-2">Search</button>
    </form>

    <table class="table-auto w-full bg-white rounded shadow">
        <thead>
            <tr class="bg-gray-200 text-gray-700">
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Age</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody id="student-table">
            @include('partials.students_rows', ['students' => $students])
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#search-form').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: "{{ route('students.search') }}",
                    method: "GET",
                    data: $(this).serialize(),
                    success: function(data) {
                        $('#student-table').html(data); // Replace the table body with the new rows
                    },
                    error: function(error) {
                        console.error("Error:", error);
                    }
                });
            });
        });
    </script>
@endsection
