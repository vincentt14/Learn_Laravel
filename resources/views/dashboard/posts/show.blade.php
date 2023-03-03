@extends('dashboard.layouts.main')

@section('container')
  <div class="container">
    <div class="row my-5">
      <div class="col-lg-8">
        <h2 class="mb-3">{{ $post->title }}</h2>
        <a href="/dashboard/posts" class="btn btn-success">Back to all my posts</a>
        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">Edit</a>
        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
          @method('delete')
          @csrf
          <button class="btn btn-danger border-0" onClick="return confirm('Are you sure?')">Delete</button>
        </form>
        @if ($post->image)
          <div style="max-height: 350px; overflow:hidden">
            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">
          </div>
        @else
          <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-3"
            alt="{{ $post->category->name }}">
        @endif
        <article class="my-3">
          {!! $post->body !!}
        </article>
      </div>
    </div>
  </div>
@endsection
