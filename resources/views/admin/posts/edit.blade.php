@extends('layouts.app')

@section('content')
    <div class="container">

      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="form-group">
          <label for="title">Edit title</label>
          <input class="form-control" type="text" id="title" name="title" value="{{ old('title', $post->title) }}">
        </div>
        <div class="form-group">
          <label for="body">Edit text</label>
          <textarea class="form-control" id="body" name="body">{{ old('body', $post->body) }}</textarea>
        </div>

        <input class="btn btn-primary" type="submit" value="Edit">
      </form>
    </div>
@endsection