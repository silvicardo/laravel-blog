@extends('layouts.app')

@section('content')

    <h1>Edit post</h1>

    {{-- FORM CON LARAVEL COLLECTIVE --}}
    {{-- https://laravelcollective.com/docs/master/html --}}
    {{-- per ogni form inseriamo una label e un campo --}}
    {{-- label(attributo for del tag , testo nel tag) --}}
    {{-- text/textarea input: (attributo name, attributo value, array(classi, placeholder,...)) --}}
    {{-- il form innesca una PUT request, facendo riferimento alla funzione update in PostsController --}}
    {{-- la action in questo caso è un array perchè si inoltra alla funzione update l'id del post --}}

    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method'=> 'POST']) !!}
      <div class="form-group">

        {{ Form::label('title', 'Title')}}
        {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}

        {{ Form::label('body', 'Body')}}
        {{-- dando alla text area id article-ckeditor la "affidiamo"  --}}
        {{ Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body'])}}

      </div>

      {{-- per effetturare una PUT request laravel fornisce questo metodo --}}
      {{ Form::hidden('_method', 'PUT')}}
      {{ Form::submit('Submit',['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}

@endsection
