@extends("template")

@section("content")
    @foreach ($posts as $post)
        <a href="{{ route('post', $post) }}">
            <h1>{{ $post->title }}</h1>
        </a>
    @endforeach
@endsection

{{$posts->links()}}