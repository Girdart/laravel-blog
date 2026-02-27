@extends('layouts.app')

@section('content')

    <h1>Edit Post</h1>

    <form method="POST" action="/posts/{{ $post->id }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" value="{{ $post->title }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Content</label>
            <textarea name="content" class="form-control">{{ $post->content }}</textarea>
        </div>

        <button class="btn btn-primary">Update</button>
    </form>

@endsection
