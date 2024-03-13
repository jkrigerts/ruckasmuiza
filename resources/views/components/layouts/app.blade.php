<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=playfair-display:900|roboto-condensed:300,300i,400,400i,700,700i" rel="stylesheet" />
        <!-- Styles -->
        @vite('resources/sass/app.scss')
    </head>
    <body>
        <livewire:navigation />
        <main class="">
            {{ $slot }}
        </main>
    </body>
</html>
