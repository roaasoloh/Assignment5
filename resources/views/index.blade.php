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
            <tbody id="students-table-body" class="text-gray-700">
            </tbody>
        </table>
    </div>
</div>
@endsection