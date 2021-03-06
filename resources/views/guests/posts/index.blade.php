@extends('layouts.app')

@section('content')
    <div class="container">
      <h1>BLOG</h1>

      @if ($posts->isEmpty())
          <p>You have no posts</p>
      @else
        @foreach ($posts as $post)
            <article class="mb-4">
              <h2>{{ $post->title }}</h2>
              <div class="info">
                {{-- Created by {{ $post->user->name }} --}}
                <div class="date">{{ $post->updated_at->diffForHumans() }}</div>
              </div>
              <a href="{{ route('posts.show', $post->slug) }}">Read more</a>
            </article>
        @endforeach
      @endif
    </div>
@endsection