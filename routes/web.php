<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\page\PostsController;

Route::get('/', [HomeController::class, 'index'])->name('welcome');

Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [PostsController::class, 'show'])->name('posts.show');
// Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/contact', function () {
    return view('page.contact');
})->name('contact');
Route::get('/albums', function () {
    return view('page.albums');
})->name('albums');
