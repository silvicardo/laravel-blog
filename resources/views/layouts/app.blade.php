<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Accediamo alle var in .env con config
        il campo conterrà il valore APP_NAME, se non
        fosse reperibile mostrerebbe il secondo parametro   -->
    <title>{{ config('app.name', 'Laravel-Blog') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    {{-- integrazione foglio di stile in public --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
      {{-- peschiamo nella cartella includes la navbar --}}
      @include('includes.navbar')

      <main class="container py-4">
        {{-- include della porzione per gestione errori --}}
        @include('includes.messages')
        {{-- praticamente ciò che viene creato in ogni pagina, il contenuto --}}
        @yield('content')
      </main>

    {{-- Script default per funzionamento ckEditor --}}
    {{-- https://github.com/UniSharp/laravel-ckeditor --}}
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
      CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>
