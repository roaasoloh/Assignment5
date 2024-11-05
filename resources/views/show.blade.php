@extends('layout')

@section('title', $student->name)

@section('header', $student->name)

@section('content')
<div class="container mt-4 text-center">
    <h1>{{ $student->name }}</h1>
    <p>Age: {{ $student->age }}</p>
    <a href="{{ route('students.index') }}" class="btn btn-primary">Back to Student List</a>
</div>
@endsection
