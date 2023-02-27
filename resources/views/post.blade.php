@extends('layouts.main')

@section('container')
  <article>
    <h2 class="mb-3">{{ $post->title }}</h2>
    <p class="mb-5">By: Vincent in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
  </article>
  <br>
  <a href="/posts">Back to Posts</a>
@endsection