<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Products;
Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// Route::get('products', Products::class, 'products');
Route::get('/products', function () {
    return view('livewire.products');
})->middleware(['auth', 'verified'])->name('products');

require __DIR__.'/auth.php';
