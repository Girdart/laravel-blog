<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    // список постов
    public function index()
    {
        $posts = Post::all();
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
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Post::create($data);

        return redirect('/post'); // возвращаемся к списку постов
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

        return redirect('/post'); // или /posts если нужно
    }

    // Delete post in DB

    public function destroy(Post $post)
    {
        $post->delete();// Удаляем запись из базы
        return redirect('/post');// Возвращаемся к списку постов
    }
}
