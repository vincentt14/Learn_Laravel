@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-md-nowrap align-items-center border-bottom mb-3 flex-wrap pt-3 pb-2">
    <h1 class="h2">My posts</h1>
  </div>

  <div class="table-responsive col-lg-8">
    <table class="table-striped table-sm table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category->name }}</td>
            <td><a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info">view</a></td>
            <td><a href="/" class="badge bg-warning">edit</a></td>
            <td><a href="/" class="badge bg-danger">delete</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
