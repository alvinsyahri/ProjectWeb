@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-5">{{ $post->title }}</h1>
                <p>By.<a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> In <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                <img src="/img/1.jpeg" height="250" width="500" alt="{{ $post->category->name }}" class="img-fluid">
                {!! $post->body !!}
                <a href="/posts" class="d-block">Back to Post</a>
            </div>
        </div>
    </div>
@endsection
