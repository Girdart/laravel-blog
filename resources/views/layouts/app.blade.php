<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/post">My Blog</a>
    </div>
</nav>
<!-- CONTENT -->
<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>
