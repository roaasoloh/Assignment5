@extends('layout')

@section('title', 'Students List')

@section('content')
<div class="bg-white p-8 rounded-lg">

    @if(session('success'))
    <div class="flash-message bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
        {{ session('success') }}
    </div>
    @endif
    @if(session('delete'))
    <div class="flash-message bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
        {{ session('delete') }}
    </div>
    @endif

    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-semibold">Students List</h1>
        <a href="{{ route('students.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
            Add Student
        </a>
    </div>

    <div class="bg-gray-100 p-6 rounded-lg shadow mb-6">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">

            <div class="flex flex-col">
                <label for="searchName" class="text-gray-600 mb-1">Search by name</label>
                <div class="flex items-center bg-white border border-gray-300 rounded-lg px-3 py-2">
                    <span class="text-blue-500 mr-2">🔍</span>
                    <input type="text" id="searchName" placeholder="Enter name"
                        class="bg-transparent focus:outline-none w-full text-gray-700 placeholder-gray-500">
                </div>
            </div>

            <div class="flex flex-col">
                <label for="ageFilter" class="text-gray-600 mb-1">Filter by age</label>
                <div class="flex items-center bg-white border border-gray-300 rounded-lg px-3 py-2">
                    <span class="text-blue-500 mr-2">📅</span>
                    <input type="number" id="ageFilter" placeholder="Enter age"
                        class="bg-transparent focus:outline-none w-full text-gray-700 placeholder-gray-500">
                </div>
            </div>

            <div class="flex flex-col">
                <label for="sortOrder" class="text-gray-600 mb-1">Sort Order</label>
                <select id="sortOrder" class="bg-white border border-gray-300 rounded-lg px-3 py-2 focus:outline-none text-gray-700">
                    <option value="asc">Ascending</option>
                    <option value="desc">Descending</option>
                </select>
            </div>
            <div class="flex items-center justify-center col-span-3">
                <button id="resetButton" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 focus:outline-none">
                    Reset
                </button>
            </div>

        </div>
    </div>


    <div class="overflow-x-auto rounded-lg shadow-lg">
        <table class="min-w-full bg-white rounded-lg">
            <thead>
                <tr class="bg-gradient-to-r from-gray-50 to-gray-100 text-gray-600">
                    <th class="py-4 px-6 text-left font-semibold">Name</th>
                    <th class="py-4 px-6 text-left font-semibold">Age</th>
                    <th class="py-4 px-6 text-center font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody id="students-table-body" class="text-gray-700">
            </tbody>
        </table>
    </div>
</div>
<script>
    $(document).ready(function() {
        //changed input were used here to support numeric input up/down
        $('#sortOrder').val('');
        $('#searchName, #ageFilter,#sortOrder').on('keyup change input', function() {
            performSearch();
        });
        performSearch();
        if ($('.flash-message').length) {
            $('.flash-message').delay(3000).fadeOut(500, function() {
                $(this).remove();
            });
        }
    });
    $('#resetButton').on('click', function() {
        $('#searchName').val('');
        $('#ageFilter').val('');
        $('#sortOrder').val('');
        performSearch();
    });

    function performSearch() {
        let name = $('#searchName').val();
        let age = $('#ageFilter').val();
        let sortOrder = $('#sortOrder').val();
        $.ajax({
            url: "{{ route('students.search') }}",
            method: 'GET',
            data: {
                name: name,
                age: age,
                sortOrder: sortOrder
            },
            success: function(response) {
                $('#students-table-body').html(response);

            },
            error: function(msg) {
                console.error("An error occurred:", msg.statusText);
            }
        });
    }
</script>
@endsection