<header>
    <div>
        <a href="{{ route('landing') }}" wire:navigate class="logo-link">
            @persist('logo')
                <img src="{{ asset('images/logo.png') }}" alt="Ruckas muižas logo">
            @endpersist
        </a>
        <nav>
            <ul>
                <x-navigation.nav-link href="about">Par muižu</x-navigation.nav-link>
                <x-navigation.nav-link href="events">Afiša</x-navigation.nav-link>
                <x-navigation.nav-link href="services">Izklaide</x-navigation.nav-link>
                <x-navigation.nav-link href="stay">Nakšņošana</x-navigation.nav-link>
                <x-navigation.nav-link href="blog">Blogs</x-navigation.nav-link>
                <x-navigation.nav-link href="gallery">Galerija</x-navigation.nav-link>
            </ul>
        </nav>
        <div class="hamburger">
            <x-navigation.hamburger></x-navigation.hamburger>
        </div>

    </div>
</header>