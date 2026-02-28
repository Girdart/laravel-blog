@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Dashboard</h1>
        <p>Добро пожаловать на панель управления, {{ Auth::user()->name }}!</p>

        <div class="mt-6">
            <a href="{{ route('posts.index') }}" class="btn btn-primary">
                Перейти к списку постов
            </a>
        </div>
    </div>
@endsection
