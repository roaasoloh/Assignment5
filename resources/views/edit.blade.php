@extends('layout')
@section('title', 'Edit Student')
@section('header', 'Edit Student')
@section('content')
    <form action="{{ route('students.update', $student->id) }}" method="POST" class="bg-white p-6 rounded shadow-md">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" value="{{ $student->name }}" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm">
        </div>
        <div class="mb-4">
            <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
            <input type="number" name="age" id="age" value="{{ $student->age }}" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm">
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
    </form>
@endsection
