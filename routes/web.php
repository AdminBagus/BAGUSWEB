<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Halaman publik
Route::view('/', 'welcome')->name('welcome');
Route::view('/homepage', 'homepage')->name('homepage');
Route::view('/project', 'project')->name('project');
Route::view('/contact', 'contact')->name('contact');
Route::view('/details', 'details')->name('details');

// Halaman dengan auth middleware
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Auth route bawaan Laravel Breeze/Fortify/etc.
require __DIR__.'/auth.php';
