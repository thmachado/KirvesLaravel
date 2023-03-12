<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('app.css') }}" />
    </head>
    <body class="antialiased">
        <div class="app">
            <img src="{{ asset('avatar.png')}}" alt="Thiago Machado - Avatar"/>
            <h1>Hi, there!</h1>
            <p>My name is <b>Thiago Machado</b>, I'm from Brazil (the best place in the World 🥳).</p>
            <p>I created this repository to show my skills using Laravel/PHP.</p>
            <p>Enjoy it.</p>
        </div>
    </body>
</html>
