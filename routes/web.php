<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NormalizationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EnrollmentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/normalization', [NormalizationController::class, 'index'])->name('normalization.index');
Route::get('/normalization/1nf', [NormalizationController::class, 'firstNF'])->name('normalization.firstNF');
Route::get('/normalization/2nf', [NormalizationController::class, 'secondNF'])->name('normalization.secondNF');
Route::get('/normalization/3nf', [NormalizationController::class, 'thirdNF'])->name('normalization.thirdNF');
Route::get('/normalization/bcnf', [NormalizationController::class, 'bcnf'])->name('normalization.bcnf');

// CRUD Routes
Route::resource('products', ProductController::class);
Route::resource('sales', SaleController::class);
Route::resource('employees', EmployeeController::class);
Route::resource('departments', DepartmentController::class);
Route::resource('courses', CourseController::class);
Route::resource('students', StudentController::class);
Route::resource('enrollments', EnrollmentController::class);
