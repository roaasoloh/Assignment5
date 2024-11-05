@extends('layout')

@section('title', 'Student Management')

@section('header', 'Student List')

@section('content')
    <div class="container mx-auto p-4">
        @if (session('success'))
            <div id="success-message" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        <!-- Input Field section -->
        <div class="flex items-center justify-between mb-4">
            <!-- Search Input feild -->
            <input type="text" placeholder="Enter the name you want to search for here" id="search-input"
                class="p-2 border border-gray-300 rounded w-1/2 focus:outline-none focus:ring-2 focus:ring-blue-400" />

            <!-- Filter by Age input feild -->
            <div class="w-1/4 ml-2">
                <input type="text" placeholder="Filter by Age" id="age-filter"
                    class="p-2 border border-gray-300 rounded w-full focus:outline-none focus:ring-2 focus:ring-blue-400" />
            </div>
        </div>

        <!-- List Students (table) -->
        <table class="min-w-full bg-white border border-gray-200 shadow-lg rounded">
            <thead class="bg-brown-800 text-white">
                <tr>
                    <th class="py-3 px-6 text-left font-semibold">Name</th>
                    <th class="py-3 px-6 text-left font-semibold">Age</th>
                    <th class="py-3 px-6 text-center font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody id="student-table-body">
                @include('SearchFilter', ['students' => $students])
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Auto-dismiss success message after 3 seconds
            setTimeout(function() {
                $('#success-message').fadeOut('slow');
            }, 3000);

            function fetchStudents() {
                $.ajax({
                    url: "{{ route('students.filter') }}",
                    method: "GET",
                    data: {
                        name: $('#search-input').val(),
                        age: $('#age-filter').val()
                    },
                    success: function(data) {
                        $('#student-table-body').html(data);
                    }
                });
            }
            $('#search-input, #age-filter').on('input', function() {
                fetchStudents();
            });

            // Confirmation prompt for delete action
            $(document).on('submit', '.delete-form', function(e) {
                e.preventDefault();
                var form = this;
                if (confirm("Are you sure you want to delete this student?")) {
                    form.submit();
                }
            });
        });
    </script>
@endsection
