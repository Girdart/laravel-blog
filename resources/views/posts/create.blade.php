<h1> Create post </h1>
<form method="POST" action="/posts">
    @csrf

    <label>Title</label><br>
    <input type="text" name="title" value="{{ old('title') }}" required>

    <label>Content</label><br>
    <textarea name="content" required>{{ old('content') }}</textarea>

    <button type="submit">Save</button>

</form>

