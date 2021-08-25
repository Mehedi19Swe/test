<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [App\Http\Controllers\CourseController::class, 'index'])->name('index');
Route::post('/course/store', [App\Http\Controllers\CourseController::class, 'store'])->name('store');
Route::get('/course/edit/{course_id}', [App\Http\Controllers\CourseController::class, 'edit'])->name('edit');
Route::post('/course/update/{course_id}', [App\Http\Controllers\CourseController::class, 'update'])->name('update');
Route::get('/course/destroy/{course_id}', [App\Http\Controllers\CourseController::class, 'destroy'])->name('destroy');
