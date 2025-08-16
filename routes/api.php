<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/posts', [App\Http\Controllers\Api\PostsController::class, 'index']);
Route::get('/posts/{slug}', [App\Http\Controllers\Api\PostsController::class, 'show']);
