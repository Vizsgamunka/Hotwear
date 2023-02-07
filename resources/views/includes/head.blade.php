<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotwear</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Links -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="module" src="{{ url('script/main.js') }}"></script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <main>
        <header>
            <h1>Hotwear</h1>
        </header>
        <nav>
            <ul>
                <li><a href="{{url('/')}}">Kezdőlap</a></li>
                <li><a href="{{url('/ruha')}}">Ruhák</a></li>
                <li><a href="{{url('/tervezo')}}">Tervezők</a></li>
                @auth
                <li><a href="{{url('/rendeles')}}">Rendelések</a></li>
                @endauth
                <li>
                    @if (Route::has('login'))
                        @auth
                        <a href="{{ route('profile_show') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Profil</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Bejelentkezés</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Regisztráció</a>
                    @endif
                        @endauth
                    @endif
                </li>
            </ul>
        </nav>