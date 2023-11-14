<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class, 'index'])->name('home');
Route::post('/', [StudentController::class, 'store'])->name('create');
Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
Route::post('/edit/{id}', [StudentController::class, 'update'])->name('update');
Route::get('/delete/{id}', [StudentController::class, 'destroy'])->name('delete');


