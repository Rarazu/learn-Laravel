@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">
            Create New Post
        </h1>
    </div>

    <form method="post" action="/dashboard/posts">
        @csrf
        <div class="col-lg-8">
            <div class="mb-3">
                <label for="title" class="form-label">
                    Title <span class="text-secondary">(example: Judul Pertama)</span>
                </label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3"> 
                <label for="slug" class="form-label">
                    Slug  <span class="text-secondary">(example: judul-pertama)</span>
                </label>
                <input type="text" class="form-control" id="slug" name="slug">
            </div>
            <div class="mb-3"> 
                <label for="category" class="form-label">
                    Category
                </label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach                    
                  </select>
            </div>
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </div>
    </form>
@endsection