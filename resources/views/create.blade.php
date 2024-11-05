@extends('layout')

@section('title', 'Document')

@section('content')
    <h1 class="text-2xl font-bold">Add New Student</h1>
    <form action="{{ route('students.store') }}" method="POST" class="mt-4">
        @csrf
        <input type="text" name="name" placeholder="Name" required class="border rounded p-2 mb-2">
        <input type="number" name="age" placeholder="Age" required class="border rounded p-2 mb-4">
        <button type="submit" class="bg-blue-500 text-white rounded p-2">Add New Student</button>
    </form>
@endsection