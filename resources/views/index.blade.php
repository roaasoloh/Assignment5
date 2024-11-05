<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Assignment 5</title>
</head>

<body class="bg-gray-100">
    @include('navbar')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Students List</h1>
        <a href="{{ route('students.create') }}" class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white font-semibold rounded hover:bg-blue-700">Add New Student</a>

        
        <div class="flex mb-6 space-x-4">
            <input type="text" id="searchName" placeholder="Search by name" class="p-2 border border-gray-300 rounded">
            <input type="number" id="minAge" placeholder="Min age" class="p-2 border border-gray-300 rounded">
            <input type="number" id="maxAge" placeholder="Max age" class="p-2 border border-gray-300 rounded">
            <button id="filterButton" class="px-4 py-2 bg-blue-600 text-white font-semibold rounded hover:bg-blue-700">Filter</button>
        </div>

        
        <div class="overflow-x-auto bg-white shadow-md rounded-lg mt-6">
            <table class="min-w-full leading-normal">
                <thead>
                    <tr>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Name
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Age
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody id="studentTable">
                    @foreach ($students as $student)
                    <tr class="hover:bg-gray-50">
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $student->name }}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $student->age }}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <a href="{{ route('students.show', $student->id) }}" class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 rounded-lg transition duration-200">Show</a>
                            <a href="{{ route('students.edit', $student->id) }}" class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-green-600 hover:bg-green-700 rounded-lg transition duration-200">Edit</a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-red-600 hover:bg-red-700 rounded-lg transition duration-200">Delete</button>
                            </form>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#filterButton').on('click', function() {
                var name = $('#searchName').val();
                var minAge = $('#minAge').val();
                var maxAge = $('#maxAge').val();

                $.ajax({
                    url: "{{ route('students.filter') }}",
                    type: 'GET',
                    data: {
                        name: name,
                        minAge: minAge,
                        maxAge: maxAge,
                    },
                    success: function(response) {
                        $('#studentTable').html(response);
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>

    @include('footer')
</body>

</html>
