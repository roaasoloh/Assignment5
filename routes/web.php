<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::resource('students', StudentController::class);
Route::get('/', [StudentController::class, 'index']);
Route::get('/index', [StudentController::class, 'index'])->name('index');
Route::get('/filter', [StudentController::class, 'filter'])->name('students.filter');
