@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Posts</h1>

    @foreach($posts as $post)
        <div class="mb-4 p-4 bg-white dark:bg-gray-800 shadow rounded">
            <h2 class="text-2xl font-semibold mb-1 text-gray-900 dark:text-gray-100">
                <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
            </h2>
            <p class="text-gray-700 dark:text-gray-300 mb-1">
                Автор: {{ $post->user->name ?? 'Неизвестный' }}
            </p>
            <small class="text-gray-500 dark:text-gray-400">
                Опубликовано: {{ $post->created_at->format('d.m.Y H:i') }}
            </small>

            @can('update', $post)
                <div class="mt-2 flex space-x-2">
                    <a href="{{ route('posts.edit', $post) }}"
                       class="px-3 py-1 bg-blue-600 text-white rounded hover:bg-blue-700">Edit</a>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">Delete</button>
                    </form>
                </div>
            @endcan
        </div>
    @endforeach

    <div class="mt-6">
        {{ $posts->links() }}
    </div>
@endsection
