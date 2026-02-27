@extends('layouts.app')

@section('content')

    <h1>Create Post</h1>

    <form method="POST" action="/posts">
        @csrf

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Content</label>
            <textarea name="content" class="form-control"></textarea>
        </div>

        <button class="btn btn-success">Save</button>
    </form>

@endsection
