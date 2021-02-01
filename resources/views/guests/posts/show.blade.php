@extends('layouts.app')

@section('content')
    <div class="container">
      <h1>{{ $post->title }}</h1>

      <p>{{ $post->body }}</p>

      @if (Auth::id() == $post->id)
        <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>
      @endif
    </div>
@endsection