@extends('layout')

@section('title', 'Student List')

@section('content')
    <div class="container">
        <h2 class="text-2xl font-bold">Student List</h2>
        <form id="searchForm" class="mb-4">
            <input type="text" name="name" placeholder="Search by name" class="border p-2 mb-4">
            <input type="number" name="min_age" placeholder="Min Age" class="border p-2 mb-4">
            <input type="number" name="max_age" placeholder="Max Age" class="border p-2 mb-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2">Search</button>
        </form>

        <table class="min-w-full border-collapse border border-gray-300 mt-4">
            <thead class="bg-blue-600 text-white">
                <tr>
                    <th class="border border-gray-300 p-2">Name</th>
                    <th class="border border-gray-300 p-2">Age</th>
                    <th class="border border-gray-300 p-2">Actions</th>
                </tr>
            </thead>
            <tbody id="studentTableBody" class="bg-gray-100">
                @foreach($students as $student)
                    <tr class="hover:bg-gray-200">
                        <td class="border border-gray-300 p-2">{{ $student->name }}</td>
                        <td class="border border-gray-300 p-2">{{ $student->age }}</td>
                        <td class="border border-gray-300 p-2 flex space-x-2">
                            <a href="{{ route('students.show', $student->id) }}" class="bg-green-500 text-white px-4 py-2 rounded">Show</a>
                            <a href="{{ route('students.edit', $student->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#searchForm').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: '{{ route("students.search") }}',
                method: 'GET',
                data: $(this).serialize(),
                success: function(data) {
                    $('#studentTableBody').html(data);
                }
            });
        });
    </script>
@endsection
