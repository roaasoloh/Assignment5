<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'index'])->name('index');

Route::resource('students', StudentController::class);

Route::get('students/search', [StudentController::class, 'search'])->name('students.search');

Route::get('students/filter', [StudentController::class, 'filter'])->name('students.filter'); 
