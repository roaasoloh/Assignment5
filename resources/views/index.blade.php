@extends('layout')

@section('title', 'Students List')
@section('header', 'Students List')

@section('content')
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

<div class="mb-4">
    <form id="searchForm" class="flex gap-4 mb-4">
        <input type="text" id="search" name="search" placeholder="Search by name"
               class="border border-gray-300 p-2 rounded-md" autocomplete="off">
        <input type="number" id="min_age" name="min_age" placeholder="Min Age"
               class="border border-gray-300 p-2 rounded-md" min="0">
        <input type="number" id="max_age" name="max_age" placeholder="Max Age"
               class="border border-gray-300 p-2 rounded-md" min="0">
    </form>
</div>

<div id="studentTable">
    @include('studentTable', ['students' => $students])
</div>

<a href="{{ route('students.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded my-4 inline-block">Add New Student</a>

@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
<script>
    $(document).ready(function () {
        function fetchStudents() {
            let search = $('#search').val();
            let minAge = $('#min_age').val();
            let maxAge = $('#max_age').val();

            $.ajax({
                url: "{{ route('students.search') }}",
                method: "GET",
                data: { search: search, min_age: minAge, max_age: maxAge },
                success: function (response) {
                    $('#studentTable').html(response);
                },
                error: function () {
                    alert('Error retrieving data.');
                }
            });
        }

        $('#search, #min_age, #max_age').on('input', function () {
            fetchStudents();
        });
    });
</script>
