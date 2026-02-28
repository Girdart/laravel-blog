@extends('layouts.app')

@section('content')
    <div class="mb-3">
        <p>Автор: {{ optional($post->user)->name ?? 'Неизвестный' }}</p>
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
    </div>

    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to Posts</a>

    @can('update', $post)
        <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Delete</button>
        </form>
    @endcan
@endsection
