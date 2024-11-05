@extends('layout')
@section('title', 'Page Title')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <h1>Edit Student</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $student->name }}" required>
        </div>
        
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" id="age" class="form-control" value="{{ $student->age }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</body>

</html>
@endsection