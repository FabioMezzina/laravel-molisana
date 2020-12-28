<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>La Molisana</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        {{-- Style --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="text-center">
        {{-- HEADER --}}
        @include('partials.header')
        
        {{-- NAVBAR --}}
        @include('partials.navbar')

        {{-- MAIN CONTENT --}}
        <main>
            <div class="container">
                @yield('main-content')
            </div>
        </main>

        {{-- FOOTER --}}
        @include('partials.footer')
    </body>
</html>