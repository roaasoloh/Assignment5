<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Resource route for managing students
Route::resource('students', StudentController::class);

// AJAX route for searching students
Route::get('students/search', [StudentController::class, 'search'])->name('students.search');
