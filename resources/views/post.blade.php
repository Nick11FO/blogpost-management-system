@extends('layouts/main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <p>By. <a href="/Users/{{ $post->user->name }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/Categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                

                <a href="/Blog" class="d-block mt-3">Back to posts</a>
            </div>
        </div>
    </div>    
@endsection