<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


# Vista Visitante:
# Welcome
Route::view('/', 'web.welcome')->name('welcome');
# About:
Route::view('/about', 'web.about')->name('about');

# Contacto
Route::get('/contacto', function () {
    return view('web.contacto');
})->name('contacto');



# Vista Usuario
# Dashboard
Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});
require __DIR__.'/auth.php';
