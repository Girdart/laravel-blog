<h1>Edit Post</h1>

<form method="POST" action="/posts/{{$post->id}}">
    @csrf
    @method('PUT')

    <label>Title</label><br>
    <input type="text" name="title" value="{{$post->title}}"><br><br>
    <label>Content</label><br>
    <textarea name="content" required>{{ $post->content }}</textarea><br><br>

    <button type="submit">Update</button>

</form>
