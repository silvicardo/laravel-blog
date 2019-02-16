
{{-- Questa pagina 'estende' il layout in views/layots/app.blade.php --}}
@extends('layouts.app')

{{-- posizionerà nel suddetto layout la sezione

    -> yield nel layout padre
    -> section endsection nel figlio

 --}}

@section('content')

  <h1> {{ $title }}</h1>

  <p>This is the about page</p>

@endsection
