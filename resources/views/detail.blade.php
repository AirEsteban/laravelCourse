<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detailed language</title>
</head>
<body>
    @if (is_null($post))
        <h1>That identifier was not found.</h1>
    @else
        <h1>{{ $post["name"] }}</h1>
        <h2>{{ $post["description"] }}</h2>
    @endif
</body>
</html>