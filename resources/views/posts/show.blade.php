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
      <small>Written on  {{ $post->created_at }} by {{ $post->user->name }}</small>
      </div>
    </div>

    {{-- Bottone per la modifica della pagina --}}
    <a href="/posts/{{ $post->id }}/edit" class="btn btn-lg btn-default btn-outline-secondary">Edit this Post</a>

    {{-- FORM PER LA CANCELLAZIONE, DELETE REQUEST --}}
    {{-- Richiamo alla funzione destroy in PostsController, mandangogli l'id --}}
    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=> 'POST', 'class' => 'float-right']) !!}

      {{-- per effetturare una DELETE request laravel fornisce questo metodo --}}
      {{ Form::hidden('_method', 'DELETE')}}
      {{ Form::submit('Delete this post',['class' => 'btn btn-lg btn-danger'])}}

@endsection
