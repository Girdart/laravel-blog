<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hello Laravel';
});


//// Создаём маршрут /posts, который вызывает метод index контроллера
//// список постов
//Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
//
//// форма создания
//Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
//
//// сохранение
//Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
//
//// редактирование
//Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
//
//// обновление
//Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
//
//// удаление
//Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');


// Создаём все стандартные маршруты: index, create, store, show, edit, update, destroy
Route::resource('posts', PostController::class);
