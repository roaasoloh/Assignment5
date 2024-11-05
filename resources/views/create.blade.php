@extends('layout')

@section('title', 'Add New Student')

@section('header', 'Add New Student')

@section('content')
    <div class="bg-white p-8 rounded shadow-md max-w-md w-full mx-auto">
        <form action="{{ route('students.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <input type="text" name="name" placeholder="Name" required
                    class="w-full p-2 border border-gray-300 rounded" />
            </div>
            <div>
                <input type="number" name="age" placeholder="Age" required
                    class="w-full p-2 border border-gray-300 rounded" />
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Add New
                Student</button>
        </form>

        <!-- Back Link to Student List -->
        <a href="{{ route('students.index') }}" class="mt-4 inline-block text-blue-500 hover:underline">Back to Student
            List</a>
    </div>
@endsection
