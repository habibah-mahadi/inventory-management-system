<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ItemController::class, 'index'])->name('item.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/item/create', [ItemController::class, 'create'])->name('item.create');
    Route::post('/item', [ItemController::class, 'store'])->name('item.store');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::get('/item', [ItemController::class, 'index'])->name('item.index');
// Route::get('/item/create', [ItemController::class, 'create'])->name('item.create');
// Route::post('/item', [ItemController::class, 'store'])->name('item.store');
// Route::get('/item/{id}', [ItemController::class, 'show'])->name('item.show');
// Route::get('/item/{id}/edit', [ItemController::class, 'edit'])->name('item.edit');
// Route::put('/item/{id}', [ItemController::class, 'update'])->name('item.update');
// Route::delete('/item/{id}', [ItemController::class, 'destroy'])->name('item.destroy');

// Route::resource('item', ItemController::class);