@extends('dashboard.layouts.main')

@section('container')
<div class="container">
  <div class="row my-5">
    <div class="col-lg-8">
      <h2 class="mb-3">{{ $post->title }}</h2>
      <a href="/dashboard/posts" class="btn btn-success">Back to all my posts</a>
      <a href="/" class="btn btn-warning">Edit</a>
      <a href="/" class="btn btn-danger">Delete</a>
      <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-3"
        alt="{{ $post->category->name }}">
      <article class="my-3">
        {!! $post->body !!}
      </article>
      <br>
      <a href="/posts" class="text-decoration-none">Back to Posts</a>
    </div>
  </div>
</div>
@endsection
