<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css'])
        @stack('styles')
    </head>
    <body class="app">
        <header>
            <a href={{route('book.index')}}>Home</a>
            <a href={{route('book.create')}}>Adicionar Livro</a>
            <a href={{route('user.index')}}>Usuarios</a>
            

            Gerenciamento de biblioteca</p></header>

        @yield('content')

        <footer >
            <p>Gerenciamento de biblioteca &copy; 2023</p>
        </footer>
    </body>
</html>
