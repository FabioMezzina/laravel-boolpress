@extends('layouts.app')

@section('content')
    <div class="container">
      <h1>Your posts</h1>

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
                    <a href="" class="btn btn-success">Show</a>
                    <a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      @endif
    </div>
@endsection