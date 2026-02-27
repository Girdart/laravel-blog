<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    // список постов
    public function index()
    {
        // Берём посты по 5 штук на страницу
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);

        return view('posts.index', compact('posts'));
    }

    // страница формы
    public function create()
    {
        return view('posts.create');
    }

    // сохранение поста
    public function store(Request $request)
    {
        // 1️⃣ Проверяем и валидируем данные из формы
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // 2️⃣ Создаём запись в базе
        Post::create($data);

        // 3️⃣ Редирект обратно к списку постов + flash-сообщение
        return redirect()
            ->route('posts.index')
            ->with('success', 'Post created successfully');
    }

    // Show edit form
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // Update post in DB
    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post->update($data);

        return redirect()
            ->route('posts.index')
            ->with('success', 'Post updated successfully');
    }

    // Delete post in DB

    public function destroy(Post $post)
    {
        $post->delete();// Удаляем запись из базы
        return redirect()
            ->route('posts.index')
            ->with('success', 'Post deleted successfully');// Возвращаемся к списку постов
    }
}
