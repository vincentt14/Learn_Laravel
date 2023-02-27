@extends('layouts.main')

@section('container')
  <article>
    <h2 class="mb-3">{{ $post->title }}</h2>
    <p class="mb-5">By: <a href="" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
  </article>
  <br>
  <a href="/posts" class="text-decoration-none">Back to Posts</a>
@endsection