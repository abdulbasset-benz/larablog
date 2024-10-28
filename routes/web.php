<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// basic routing for CRUD operations
Route::prefix('posts')->group(function(){
    Route::get('/', [PostController::class, 'index'])->name('posts.index');
    Route::get('/about', [PostController::class, 'about'])->name('posts.about');
    Route::get('/create', [PostController::class , 'create'])->name('posts.create');
    Route::post('/store', [PostController::class, 'store'])->name('posts.store');
    Route::get('/show/{post}', [PostController::class, 'show'])->name('posts.show');
    Route::put('/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::get('/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::delete('/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
});

// middlware routing
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';