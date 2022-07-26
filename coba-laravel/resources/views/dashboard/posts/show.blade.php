@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-5">{{ $post->title }}</h1>
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span>Back to My posts</a>
            <a href="" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
            <a href="" class="btn btn-danger"><span data-feather="x-circle"></span>Delete</a>
            <img src="/img/1.jpeg" height="250" width="500" alt="{{ $post->category->name }}" class="img-fluid mt-3">
            {!! $post->body !!}
            <a href="/posts" class="d-block">Back to Post</a>
        </div>
    </div>
</div>
@endsection
