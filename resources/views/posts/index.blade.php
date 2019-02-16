@extends('layouts.app')

@section('content')

  <h1>Posts</h1>

  @if(count($posts) > 0)
    @foreach($posts as $post)

    <div class="card my-5">
      <div class="card-header">
          <h3><a href="/posts/{{ $post ->id }}">{{ $post->title }}</a></h3>
      </div>
      <div class="card-body">
        <p>{{ $post->body }}</p>
        <small>Written on  {{ $post->created_at }}</small>
      </div>
    </div>



    @endforeach
  @else
    <p>No Posts found</p>
  @endif

@endsection
