@extends('layouts.app')

@section('content')
    <h1>Posts</h1>

    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create Post</a>

    <ul class="list-group">
        @foreach($posts as $post)
            <li class="list-group-item">
                <h5>{{ $post->title }}</h5>
                <p>{{ $post->content }}</p>

                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-warning">Edit</a>

                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    <!-- Навигация -->
    <div class="mt-3">
        {{ $posts->links('pagination::bootstrap-5') }}
    </div>

@endsection
