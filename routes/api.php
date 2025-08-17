<?php

use Illuminate\Http\Request;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\HomeController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/welcome', [HomeController::class,'index']);
Route::get('/posts', [App\Http\Controllers\Api\PostsController::class, 'index']);
Route::get('/posts/{slug}', [App\Http\Controllers\Api\PostsController::class, 'show']);
Route::get('/contact', [App\Http\Controllers\Api\ContactController::class, 'index']);
Route::get('/albums',[App\Http\Controllers\Api\albumsController::class, 
'index']);
Route::get('/photos', [App\Http\Controllers\Api\photosController::class, 'index']);
Route::get('/albums',[App\Http\Controllers\Api\AlbumsController::class,'index']);