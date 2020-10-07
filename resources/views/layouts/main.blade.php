<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>

    <body class="antialiased">

        <header class="head">
            <nav class="top-menu">
                <div class="top-menu__logo">
                    <a href="#" class="top-menu__logo-link">tClient</a>
                </div>
                <ul class="top-menu__container">
                    <li class="top-menu__item"><a class="top-menu__item-link" href="{{ route('home') }}">Home</a></li>
                    <li class="top-menu__item"><a class="top-menu__item-link" href="{{ route('about') }}">About</a></li>
                    <li class="top-menu__item"><a class="top-menu__item-link" href="{{ route('contacts') }}">Contacts</a></li>
                </ul>
            </nav>
        </header>

        <div class="data">
            <div class="side-right">
                @if(! empty($widgetData))
                    @widget('FormWidget', $widgetData)
                @else
                    @widget('FormWidget')
                @endif
            </div>
            <div class="content">
                @yield('content')
            </div>
        </div>

        <footer class="footer">
            <div class="footer-data">
                Футер
            </div>
        </footer>

    </body>
</html>
