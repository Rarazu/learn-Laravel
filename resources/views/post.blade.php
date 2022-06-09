{{-- @dd($post) --}}
@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post["title"] }}</h2>
        <h6>By : {{ $post["author"] }}</h6>
        <p>{{ $post["body"] }}</p>
    </article>

    <a href="/posts">Back to Blog</a>
@endsection