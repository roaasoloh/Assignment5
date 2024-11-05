<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;


Route::get('/', [StudentController::class, 'index'])->name('home');
Route::get('/students/search', [StudentController::class, 'search'])->name('students.search');
Route::resource('students', StudentController::class);