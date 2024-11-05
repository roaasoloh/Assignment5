@extends('layout')

@section('title', 'Students List')

@section('content')
<div class="bg-white p-8 rounded-lg">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-semibold">Students List</h1>
    </div>

    <div class="bg-gray-100 p-6 rounded-lg shadow mb-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="flex flex-col">
                <label for="searchName" class="text-gray-600 mb-1">Search by name</label>
                <div class="flex items-center bg-white border border-gray-300 rounded-lg px-3 py-2">
                    <span class="text-blue-500 mr-2">🔍</span>
                    <input type="text" id="searchName" placeholder="Enter name"
                        class="bg-transparent focus:outline-none w-full text-gray-700 placeholder-gray-500">
                </div>
            </div>

            <div class="flex flex-col">
                <label for="ageFilter" class="text-gray-600 mb-1">Filter by age</label>
                <div class="flex items-center bg-white border border-gray-300 rounded-lg px-3 py-2">
                    <span class="text-blue-500 mr-2">📅</span>
                    <input type="number" id="ageFilter" placeholder="Enter age"
                        class="bg-transparent focus:outline-none w-full text-gray-700 placeholder-gray-500">
                </div>
            </div>
        </div>
    </div>

    <div class="overflow-x-auto rounded-lg shadow-lg">
        <table class="min-w-full bg-white rounded-lg">
            <thead>
                <tr class="bg-gradient-to-r from-gray-50 to-gray-100 text-gray-600">
                    <th class="py-4 px-6 text-left font-semibold">Name</th>
                    <th class="py-4 px-6 text-left font-semibold">Age</th>
                    <th class="py-4 px-6 text-center font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($students as $student)
                <tr class="@if($loop->even) bg-gray-50 @else @endif hover:bg-gray-100 transition-colors">
                    <td class="py-4 px-6 border-b border-gray-200">{{ $student->name }}</td>
                    <td class="py-4 px-6 border-b border-gray-200">{{ $student->age }}</td>
                    <td class="py-4 px-6 border-b border-gray-200 text-center">
                        <div class="flex justify-center space-x-4 items-center">
                            <a href="{{ route('students.show', $student->id) }}" class="text-green-500 hover:text-green-600 font-medium transition-colors flex items-center">
                                📄 Show
                            </a>
                            <a href="{{ route('students.edit', $student->id) }}" class="text-blue-500 hover:text-blue-600 font-medium transition-colors flex items-center">
                                ✏️ Edit
                            </a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-600 font-medium transition-colors flex items-center">
                                    🗑️ Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection