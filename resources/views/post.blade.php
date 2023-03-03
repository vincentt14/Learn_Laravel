@extends('layouts.main')

@section('container')
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-8">
        <h2 class="mb-3">{{ $post->title }}</h2>
        <p class="mb-3">By: <a href="/posts?author={{ $post->author->username }}"
            class="text-decoration-none">{{ $post->author->name }}</a> in <a
            href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
        </p>
        @if ($post->image)
          <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
        @else
          <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid"
            alt="{{ $post->category->name }}">
        @endif
        <article class="my-3">
          {!! $post->body !!}
        </article>
        <br>
        <a href="/posts" class="text-decoration-none">Back to Posts</a>
      </div>
    </div>
  </div>
@endsection
