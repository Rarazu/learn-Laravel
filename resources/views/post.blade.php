{{-- @dd($post) --}}
@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>

                <h6>
                    By : 
                    <a href="/authors/{{ $post->user->username }}" class="text-decoration-none" >
                        {{ $post->user->name }}
                    </a> in 
                    <a href="/categories/{{ $post->category->slug }}">
                        {{ $post->category->name }}
                    </a>
                </h6>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" 
                alt="{{ $post->category->name }}" class="img-fluid my-3">

                <article class="my-3">
                    {!! $post->body !!}
                </article>
        
                <a href="/posts">Back to Blog</a>
            </div>
        </div>
    </div>

@endsection
