<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        {{$date = fake()->date();}}
        <br>
        {{$currentDate = date('y-m-d');}}
        <br>
        <br>
        {{$timeDate = strtotime($date);}}
        <br>
        {{$timeCeurrentDate = strtotime($currentDate);}}


        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>

        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div>welcome</div>
    </body>
</html>
