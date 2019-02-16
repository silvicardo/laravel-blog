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
           @yield('content')
         </div>


    </body>
</html>
