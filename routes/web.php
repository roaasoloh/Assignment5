<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/login', [StudentController::class, 'showLoginForm'])->name('login');
Route::post('/login', [StudentController::class, 'login']);

// Protected graduate-only route with middleware
Route::get('/graduate', [StudentController::class, 'graduate'])->middleware('check_student');
Route::resource('students', StudentController::class);
Route::get('/index', [StudentController::class, 'index'])->name('index');
Route::get('/not-graduate', function () {
    return view('login');
});
Route::post('/logout', [StudentController::class, 'logout'])->name('logout');


