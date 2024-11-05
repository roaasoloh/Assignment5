@extends('layout')

@section('title', 'Student List')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Students List</h1>

        <!-- Search and Filter Form -->
        <form id="filterForm" method="GET" action="{{ route('students.index') }}" class="row mb-4">
            <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Search by Name" value="{{ request('name') }}">
            </div>
            <div class="col-md-4">
                <input type="number" name="age" class="form-control" placeholder="Filter by Age" value="{{ request('age') }}">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary w-100">Filter</button>
            </div>
        </form>

        <!-- Add New Student Button -->
        <div class="mb-3">
            <a href="{{ route('students.create') }}" class="btn btn-primary">Add New Student</a>
        </div>

        <!-- Student List Table -->
        <table class="table table-bordered table-striped">
            <thead class="table-light">
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="studentTableBody">
                @include('_student_rows', ['students' => $students])
            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
<script>
    document.getElementById('filterForm').addEventListener('submit', function(event) {
        event.preventDefault();

        // Get form data
        let formData = new FormData(this);

        // Send AJAX request
        fetch('{{ route('students.index') }}?' + new URLSearchParams(formData), {
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.text())
        .then(html => {
            // Update table body with new rows
            document.getElementById('studentTableBody').innerHTML = html;
        })
        .catch(error => console.error('Error:', error));
    });
</script>
@endsection
