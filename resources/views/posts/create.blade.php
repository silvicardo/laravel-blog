@extends('layouts.app')

@section('content')

    <h1>Create post</h1>

    {{-- FORM CON LARAVEL COLLECTIVE --}}
    {{-- https://laravelcollective.com/docs/master/html --}}
    {{-- per ogni form inseriamo una label e un campo --}}
    {{-- label(attributo for del tag , testo nel tag) --}}
    {{-- text input: (attributo name, attributo value, array(classi, placeholder,...)) --}}
    {{-- il form innesca una POST request, facendo riferimento alla funzione store in PostsController --}}

    {!! Form::open(['action' => 'PostsController@store', 'method'=> 'POST']) !!}
      <div class="form-group">

        {{ Form::label('title', 'Title')}}
        {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}

        {{ Form::label('body', 'Body')}}
        {{ Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body'])}}

      </div>

      {{ Form::submit('Submit',['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}

@endsection
