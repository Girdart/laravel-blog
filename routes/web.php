<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hello Laravel';
});


// Создаём маршрут /posts, который вызывает метод index контроллера
Route::get('/post', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts', [PostController::class, 'store']);

// Show edit form
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
// Update post
Route::put('/posts/{post}', [PostController::class, 'update']);

//Delete post
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
