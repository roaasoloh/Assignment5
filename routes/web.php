<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::resource('students', StudentController::class);
Route::get('/', function () {
    return view('home'); // This view should extend layout.blade.php
});

Route::get('/students', function () {
    $students = Student::all();
    return view('students.index', compact('students')); // This view should extend layout.blade.php
});
