<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language list</title>
</head>
<body>
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('list') }}">List</a>
    @auth
    <a href="{{ route('dashboard') }}">Dashboard</a>
    @else
    <a href="{{ route('login') }}">Login</a>
    @endauth
    <hr/>
    <div class="container">
        @yield("content")
    </div>
</body>
</html>