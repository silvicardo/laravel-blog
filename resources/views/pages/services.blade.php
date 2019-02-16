
{{-- Questa pagina 'estende' il layout in views/layots/app.blade.php --}}
@extends('layouts.app')

{{-- posizionerà nel suddetto layout la sezione

    -> yield nel layout padre
    -> section endsection nel figlio

 --}}
@section('content')

    <h1>{{ $title }}</h1>

{{-- IF e Ciclo forEach in Laravel --}}

    @if(count($services) > 0)
    <ul class="list-group">
      @foreach($services as $service)
        <li class="list-group-item"> {{ $service }}</li>
      @endforeach
    </ul>

    @endif
@endsection
