{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
    <article class="mb-4">
        <h3>
            <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a>
        </h3>
        <h6>By : {{ $post["author"] }}</h6>
        <p>{{ $post["body"] }}</p>
    </article>
    @endforeach
@endsection