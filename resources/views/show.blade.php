@extends('layouts.layout')

@section('title', 'Student Details')

@section('content')
    <h1 class="text-2xl font-bold">{{$student->name}}</h1>
    <p class="text-gray-700">Age: {{$student->age}}</p>
    <a href="{{route('students.index')}}" class="text-blue-600 hover:underline">Back to Student List</a>
@endsection