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

      <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf
        @method('POST')

        <div class="form-group">
          <label for="title">Post title</label>
          <input class="form-control" type="text" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div class="form-group">
          <label for="body">Post text</label>
          <textarea class="form-control" id="body" name="body">{{ old('body') }}</textarea>
        </div>

        <input class="btn btn-primary" type="submit">
      </form>
    </div>
@endsection