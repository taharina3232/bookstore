<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

// Route for the home page (list of books)
Route::get('/', [BookController::class, 'index'])->name('books.index');

// Routes for CRUD operations
Route::resource('books', BookController::class);

// Alternatively, if you want to define individual routes for each action:
Route::get('books/{book}', [BookController::class, 'show'])->name('books.show');
Route::get('books/create', [BookController::class, 'create'])->name('books.create');
Route::post('books', [BookController::class, 'store'])->name('books.store');
Route::get('books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('books/{book}', [BookController::class, 'update'])->name('books.update');
Route::delete('books/{book}', [BookController::class, 'destroy'])->name('books.destroy');