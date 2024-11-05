@extends('layout')

@section('title', 'Add Student')

@section('content')
<div class="bg-white p-8 rounded-lg max-w-4xl mx-auto">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-semibold">Students List</h1>
    </div>

    <div class="bg-gray-100 p-6 rounded-lg shadow mb-6">
        <h2 class="text-xl font-semibold text-gray-700 mb-4">Add New Student</h2>
        <form id="addStudentForm" action="{{ route('students.store') }}" method="POST" class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            @csrf
            <div class="flex flex-col">
                <label for="studentName" class="text-gray-600 mb-1">Name</label>
                <input type="text" id="studentName" name="name" placeholder="Enter student name"
                    class="bg-white border border-gray-300 rounded-lg px-3 py-2 focus:outline-none w-full text-gray-700 placeholder-gray-500">
            </div>

            <div class="flex flex-col">
                <label for="studentAge" class="text-gray-600 mb-1">Age</label>
                <input type="number" id="studentAge" name="age" placeholder="Enter age"
                    class="bg-white border border-gray-300 rounded-lg px-3 py-2 focus:outline-none w-full text-gray-700 placeholder-gray-500">
            </div>

            <div class="flex items-end justify-end">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 focus:outline-none">
                    Add Student
                </button>
            </div>
        </form>
    </div>
    @endsection