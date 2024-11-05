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
    <h1>Add New Student</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
        </div>
        
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" id="age" class="form-control" placeholder="Age" required>
        </div>

        <button type="submit" class="btn btn-primary">Add New Student</button>
    </form>
</body>
</html>
@endsection
