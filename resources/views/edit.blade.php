@extends('layout')

@section('title', 'Document')

@section('content')
    <h1 class="text-2xl font-bold">Edit Student</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST" class="mt-4">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $student->name }}" required class="border rounded p-2 mb-2">
        <input type="number" name="age" value="{{ $student->age }}" required class="border rounded p-2 mb-4">
        <button type="submit" class="bg-blue-500 text-white rounded p-2">Update</button>
    </form>
@endsection