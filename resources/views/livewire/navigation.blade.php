<div class="sticky top-0 left-0 z-50 w-full h-14 border-t-8 border-red bg-black">
    <div class="max-w-7xl mx-auto h-full flex justify-between md:justify-start md:gap-8">
        <a href="{{ route('landing') }}" wire:navigate class="w-32 relative">
            @persist('logo')
                <img src="{{ asset('images/logo.png') }}" alt="Ruckas muižas logo" class="absolute -top-px left-0 w-full h-auto">
            @endpersist
        </a>
        <nav class="hidden md:block">
            <ul class="h-full flex items-center gap-8">
                <x-navigation.nav-link href="about">Par muižu</x-navigation.nav-link>
                <x-navigation.nav-link href="events">Afiša</x-navigation.nav-link>
                <x-navigation.nav-link href="services">Izklaide</x-navigation.nav-link>
                <x-navigation.nav-link href="stay">Nakšņošana</x-navigation.nav-link>
                <x-navigation.nav-link href="blog">Blogs</x-navigation.nav-link>
                <x-navigation.nav-link href="gallery">Galerija</x-navigation.nav-link>
            </ul>
        </nav>
        <div class="flex items-center">
            <x-navigation.hamburger class="md:hidden mr-2">
            </x-navigation.hamburger>
        </div>

    </div>
</div>