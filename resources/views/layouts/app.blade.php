<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- integrazione foglio di stile in public --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Accediamo alle var in .env con config
            il campo conterrà il valore APP_NAME, se non
            fosse reperibile mostrerebbe il secondo parametro   -->
        <title>{{ config('app.name','Laravel-Blog') }}</title>
    </head>
    <body>
        {{-- peschiamo nella cartella includes la navbar --}}
        @include('includes.navbar')

        {{-- facciamo riferimento ad una @section
          che si chiamerà content e che sarà
          presente in tutte le pagine
         --}}
         <div class="container">
          {{-- include della porzione per gestione errori --}}
          @include('includes.messages')
          {{-- praticamente ciò che viene creato in ogni pagina, il contenuto --}}
          @yield('content')
         </div>

        {{-- Script default per funzionamento ckEditor --}}
        {{-- https://github.com/UniSharp/laravel-ckeditor --}}
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
          CKEDITOR.replace( 'article-ckeditor' );
        </script>

    </body>
</html>
