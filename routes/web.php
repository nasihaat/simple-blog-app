<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts', PostController::class);
Route::post('/posts/{post}/like',[PostController::class, 'like'])->name('posts.like');
Route::post('/posts/{post}/dislike',[PostController::class, 'dislike'])->name('posts.dislike');
