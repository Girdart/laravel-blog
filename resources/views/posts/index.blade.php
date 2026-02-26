<!-- resources/views/posts/index.blade.php -->

<h1> List of posts </h1>

<a href="/posts/create">Create post</a>
<ul>
    @foreach($posts as $post)
        <li>
            <strong>{{ $post->title }}</strong><br>
            {{ $post->content }}<br>
            <a href="/posts/{{$post->id}}/edit">Edit</a>

            <!-- Форма для удаления -->
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </li>

    @endforeach
</ul>
