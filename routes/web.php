<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::resource('students', StudentController::class);
Route::get('students/search', [StudentController::class, 'search'])->name('students.search');

