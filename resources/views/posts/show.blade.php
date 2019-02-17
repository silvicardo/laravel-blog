@extends('layouts.app')

@section('content')

    <a class="btn btn-warning" href="/posts">Go back</a>

    <div class="card my-5">
      <div class="card-header">
        <h1>{{ $post->title }}</h1>
      </div>
      <div class="card-body">
        {{-- CKEDITOR PRODUCE DELL'HTML, per gestirlo la var body va gestita con {!! $var !! } --}}
        <p>{!! $post->body !!}</p>
        <small>Written on  {{ $post->created_at }}</small>
      </div>
    </div>

@endsection
