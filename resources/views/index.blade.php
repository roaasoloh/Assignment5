@extends('layouts.layout')

@section('content')
<div class="container mx-auto mt-6">
    <form method="GET" action="{{ route('students.index') }}" class="mb-4 flex gap-4">
        <input type="text" name="search" placeholder="Search by name" class="border p-2 rounded">
        <input type="number" name="min_age" placeholder="Min Age" class="border p-2 rounded">
        <input type="number" name="max_age" placeholder="Max Age" class="border p-2 rounded">
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Search</button>
    </form>

    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr>
                <th class="p-2 border-b">Name</th>
                <th class="p-2 border-b">Age</th>
                <th class="p-2 border-b">Actions</th>
            </tr>
        </thead>
        <tbody id="student-table">
            @foreach ($students as $student)
                <tr>
                    <td class="p-2 border-b">{{ $student->name }}</td>
                    <td class="p-2 border-b">{{ $student->age }}</td>
                    <td class="p-2 border-b">
                        <a href="{{ route('students.show', $student->id) }}" class="text-blue-500">Show</a>
                        <a href="{{ route('students.edit', $student->id) }}" class="text-yellow-500 ml-2">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
