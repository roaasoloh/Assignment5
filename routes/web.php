<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('students.index');
});
Route::resource('students', StudentController::class);
Route::get('/students/search', [StudentController::class, 'search'])->name('students.search');
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');