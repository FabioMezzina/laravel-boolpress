@extends('layouts.app')

@section('content')
    <div class="container">
      <h1>Your posts</h1>

      @if (session('title'))
        <div class="alert alert-warning">
          The post <h2>{{ session('title') }}</h2> has been succesfully removed.
        </div>
      @endif

      @if ($posts->isEmpty())
          <p>You have no posts</p>
      @else
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Created</th>
              <th colspan="3"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
                <tr>
                  <td>{{ $post->id }}</td>
                  <td>{{ $post->title }}</td>
                  <td>{{ $post->created_at->diffForHumans() }}</td>
                  <td>
                    <a href="{{ route('posts.show', $post->slug) }}" class="btn btn-success">Show</a>
                  </td>
                  <td>
                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                  </td>
                  <td>
                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <input class="btn btn-danger" type="submit" value="Destroy">
                    </form>
                  </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      @endif
    </div>
@endsection