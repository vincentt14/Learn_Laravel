@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-md-nowrap align-items-center border-bottom mb-3 flex-wrap pt-3 pb-2">
    <h1 class="h2">Create New Posts</h1>
  </div>

  <div class="col-lg-8">
    <form action="/dashboard/posts" method="post">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>
      
      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug">
      </div>

      <div class="mb-3">
        <select class="form-select" name="category_id">
          @foreach($categories as $category)
          <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        <input id="body" type="hidden" name="body">
        <trix-editor input="body"></trix-editor>
      </div>

      <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
  </div>

  <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
      fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug);
    });

    document.addEventListener('trix-file-accept', function(e){
      e.preventDefault();
    });
  </script>
@endsection
