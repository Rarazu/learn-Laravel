{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')
    <h3 class="mb-4 fw-bold">
        {{ $title }}
    </h3>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" 
            alt="{{ $posts[0]->category->name }}" class="card-img-top">
            <div class="card-body text-center">
                <h5 class="card-title">
                    <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
                        {{ $posts[0]->title }}
                    </a>
                </h5>
                <p>
                    <small>
                        By : 
                        <a href="/authors/{{ $posts[0]->user->username }}" class="text-decoration-none" >
                            {{ $posts[0]->user->name }}
                        </a> in 
                        <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">
                            {{ $posts[0]->category->name }}
                        </a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">
                    {{ $posts[0]->excerpt }}
                </p>
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn text-white"
                    style="background: #6495ED">
                    Read more
                </a>
            </div>
        </div> 
    @else
        <p class="text-center fs-4">No Post found.</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4">
                    <div class="card my-3">
                        <div class="position-absolute px-3 py-1" style="background-color: rgba(0, 0, 0, 0.7)">
                            <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none btn text-white">
                                {{ $post->category->name }}
                            </a>
                        </div>
                        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" 
                        class="card-img-top" alt="{{ $post->category->name }}">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $post->title }}
                            </h5>
                            <p>
                                <small>
                                    By : 
                                    <a href="/authors/{{ $post->user->username }}" class="text-decoration-none" >
                                        {{ $post->user->name }}
                                    </a> 
                                    {{ $post->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <p class="card-text">
                                {{ $post->excerpt }}
                            </p>
                            <a href="/posts/{{ $post->slug }}" class="btn text-white" style="background: #6495ED">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- @foreach ($posts->skip(1) as $post)
    <article class="mb-4 border-bottom pb-4">
        <h4>
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a>
        </h4>
        <h6>
            By : 
            <a href="/authors/{{ $post->user->username }}" class="text-decoration-none" >{{ $post->user->name }}</a> in 
            <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
        </h6>
        <p>{{ $post->excerpt }}</p>

        <a href="/posts/{{ $post->slug }}">Read more..</a>
    </article>
    @endforeach --}}

@endsection