@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2>{{ $post->title }}</h2>

            <a href="/dashboard/posts" class="badge p-2 text-white text-decoration-none" style="background: #6495ED">
                <span data-feather="arrow-left-cicle"></span>
                Back to My Posts
            </a>
            {{-- <a href="" class="btn btn-warning text-white">
                <span data-feather="edit"></span>
                Edit
            </a>
            <a href="" class="btn btn-danger text-white">
                <span data-feather="x-circle"></span>
                Delete
            </a> --}}

            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" 
            alt="{{ $post->category->name }}" class="img-fluid my-3 mt-2">

            <article class="my-3">
                {!! $post->body !!}
            </article>
    
            <a href="/posts">Back to Blog</a>
        </div>
    </div>
</div>
@endsection