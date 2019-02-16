
{{-- Questa pagina 'estende' il layout in views/layots/app.blade.php --}}
@extends('layouts.app')

{{-- posizionerà nel suddetto layout la sezione

    -> yield nel layout padre
    -> section endsection nel figlio

 --}}

@section('content')

<div class="jumbotron text-center">
  <h1>{{ $title }}</h1>

  <p>This is a blog app</p>

  <p>
    <a href="/login" class="btn btn-primary btn-lg">Login</a>
    <a href="/register" class="btn btn-success btn-lg">Register</a>
  </p>

</div>


@endsection
