@extends("template")

@section("content")
    @if (is_null($post))
        <h1>That identifier was not found.</h1>
    @else
        <h1>{{ $post["name"] }}</h1>
        <h2>{{ $post["description"] }}</h2>
    @endif
@endsection