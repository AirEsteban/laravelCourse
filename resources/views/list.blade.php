@extends("template")

@section("content")
    @foreach ($posts as $post)
        <a href="{{ route('post', $post['id']) }}">
            <h1>{{ $post["name"] }}</h1>
        </a>
    @endforeach
@endsection