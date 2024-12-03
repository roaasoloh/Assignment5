@extends('layout')

@section('title', 'Edit Student')

@section('content')
<div class="bg-blue-600 text-white text-center py-4 mb-8">
    <h1 class="text-xl font-semibold">Student Management</h1>
</div>

<div class="bg-white p-8 rounded-lg max-w-md mx-auto">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Edit Student</h2>
    <form id="editStudentForm" action="{{ route('students.update', $student->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <div class="flex flex-col">
            <label for="studentName" class="text-gray-700 mb-2">Name</label>
            <input type="text" id="studentName" name="name" placeholder="Enter student name" value="{{ $student->name }}"
                class="bg-white border border-gray-300 rounded-lg px-4 py-2 focus:outline-none w-full text-gray-700 placeholder-gray-500">
        </div>

        <div class="flex flex-col">
            <label for="studentAge" class="text-gray-700 mb-2">Age</label>
            <input type="number" id="studentAge" name="age" placeholder="Enter age" value="{{ $student->age }}"
                class="bg-white border border-gray-300 rounded-lg px-4 py-2 focus:outline-none w-full text-gray-700 placeholder-gray-500">
        </div>

        <div class="flex justify-center">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 focus:outline-none">
                Update Student
            </button>
        </div>
    </form>
</div>
@endsection
