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
    <div class="container">
        <h1 class="mt-5">{{ $student->name }}</h1>
        <p class="lead">Age: {{ $student->age }}</p>
        <a href="{{ route('students.index') }}" class="btn btn-primary">Back to Student List</a>
    </div>
</body>
</html>
@endsection