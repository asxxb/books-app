<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('books.index');
});

// Route::resource('books', BookController::class);

Route::get('/', [BookController::class, 'index'])->name('BooksIndex');

Route::get('/books/create', [BookController::class, 'create'])->name('BooksCreate');
Route::post('/books', [BookController::class, 'store'])->name('BookStore');

Route::get('/books/{book}', [BookController::class, 'show'])->name('BooksShow');
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('BooksEdit');

Route::put('/books/{book}', [BookController::class, 'update'])->name('BooksUpdate');
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('BooksDestroy');
