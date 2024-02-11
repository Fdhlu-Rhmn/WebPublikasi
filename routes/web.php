<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', \App\Livewire\Home::class)->name('home');

Route::get('/foo', function () {
    Artisan::call('storage:link');
});

Route::get('/', function () {
    return view('pages.beranda');
})->name('beranda');

Route::get('/books', function () {
    return view('pages.books');
})->name('books');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/books/{bookId}', function ($bookId) {
    return view('pages.detailsBooks', ['bookId' => $bookId]);
})->name('detailBooks');