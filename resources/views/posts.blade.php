@extends('layouts.main')

@section('container')
<h1 class="mb-3">Halaman Blog Posts</h1>
@foreach ($posts as $post)
  <article class="mb-5">
    <h2>
      <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
    </h2>
    <p>{{ $post->excerp }}</p>  
  </article>
@endforeach

@endsection

