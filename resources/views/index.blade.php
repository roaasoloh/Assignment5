@extends('layout')

@section('title', 'Student List')

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

    <h1 class="text-3xl font-semibold text-center mb-6">Student List</h1>

    <div class="flex justify-center gap-4 mb-8">
        <div class="w-1/2">
            <input type="text" id="searchName" placeholder="Search by Name"
                   class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none text-gray-700 placeholder-gray-500">
        </div>
        <div class="w-1/2">
            <input type="number" id="ageFilter" placeholder="Filter by Age"
                   class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none text-gray-700 placeholder-gray-500">
        </div>
    </div>

    <div class="overflow-x-auto rounded-lg shadow-lg">
        <table class="min-w-full bg-white rounded-lg">
            <thead>
                <tr class="bg-blue-100 text-gray-600">
                    <th class="py-4 px-6 text-left font-semibold">Name</th>
                    <th class="py-4 px-6 text-left font-semibold">Age</th>
                    <th class="py-4 px-6 text-center font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody id="students-table-body" class="text-gray-700">
                @foreach ($students as $student)
                <tr class="@if($loop->even) bg-gray-50 @endif hover:bg-gray-100 transition-colors">
                    <td class="py-4 px-6 border-b border-gray-200">{{ $student->name }}</td>
                    <td class="py-4 px-6 border-b border-gray-200">{{ $student->age }}</td>
                    <td class="py-4 px-6 border-b border-gray-200 text-center">
                        <div class="flex justify-center space-x-2 items-center">
                            <a href="{{ route('students.show', $student->id) }}" class="bg-green-500 text-white px-3 py-1 rounded font-medium transition hover:bg-green-600">
                                Show
                            </a>
                            <a href="{{ route('students.edit', $student->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded font-medium transition hover:bg-yellow-600">
                                Edit
                            </a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded font-medium transition hover:bg-red-600">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @if ($students->isEmpty())
    <div class="text-center py-4">No students found.</div>
    @endif
</div>

<script>
    $(document).ready(function() {
        $('#searchName, #ageFilter').on('input', function() {
            performSearch();
        });
        
        if ($('.flash-message').length) {
            $('.flash-message').delay(3000).fadeOut(500, function() {
                $(this).remove();
            });
        }
    });

    function performSearch() {
        let name = $('#searchName').val();
        let age = $('#ageFilter').val();
        $.ajax({
            url: "{{ route('students.search') }}",
            method: 'GET',
            data: {
                name: name,
                age: age
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
