<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <title>{{ $title }}</title>
    </head>
    <body>
        
    <x-layouts.navigation/>

    @if (session('status'))
        <div> 
            {{ session('status') }}
        </div>
    @endif

    {{ $slot }}
    </body>
</html>