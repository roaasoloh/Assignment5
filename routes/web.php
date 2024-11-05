<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('students.index');
});
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/filter', [StudentController::class, 'filter'])->name('students.filter');
Route::resource('students', StudentController::class)->except(['index']);
