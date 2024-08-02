<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
Route::get('/contacts/create', [ContactController::class, 'index'])->create('create');
Route::post('/contacts/store', [ContactController::class, 'store'])->name('store');
Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('show');
Route::get('/contacts/{id}', [ContactController::class, 'edit'])->name('edit');
Route::put('/contacts/{id}', [ContactController::class, 'update'])->name('update');
Route::delete('/contacts/{id}', [ContactController::class, 'delete'])->name('delete');
