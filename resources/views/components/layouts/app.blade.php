<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- open graph meta tags -->
        @isset($metaName)
            <x-open-tags :metaName='$metaName'/>
        @endisset

        @isset($meta)
            {{ $meta }}
        @endisset
        

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=playfair-display:600,900|roboto-condensed:300,300i,400,400i,700,700i" rel="stylesheet" />
        <link rel="icon" href="{{ asset('images/ruckasmuiza-favicon.png') }}">
        <!-- Styles -->
        {{-- @vite("resources/sass/app.scss") --}}
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>

    @if (Route::current()->getName() == "landing")
        <body class="no-scroll">
            <livewire:navigation />
            <main class="">
                {{ $slot }}
            </main>
        </body>
    @else
    <body>
        <livewire:navigation />
        <main class="">
            {{ $slot }}
        </main>
    </body>
    @endif

    <footer>
        <p>Ruckas muiža {{ date('Y') }}</p>
        <p>Mājaslapu taisīja Vidzemes Tehnoloģiju un Dizaina Tehnikuma kursa IPb21 audzēkņi</p>
        <p class="tooltip">Leons Aleksandrovs, Silvestrs Lignickis, Roberts Briņķis, Tomass Artūrs Rudzītis, Kristaps Polis, Jēkabs Krīgerts</p>
    </footer>
</html>
