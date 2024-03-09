<div>
    <nav class="flex gap-8 bg-black">
        <a href="{{ route('landing') }}" wire:navigate class="">
            <img src="{{ asset('images/logo.png') }}" alt="Ruckas muižas logo" class="block h-24 w-auto">
        </a>
        <ul class="mt-4 flex gap-8">
            <x-navigation.nav-link href="about">Par muižu</x-navigation.nav-link>
            <x-navigation.nav-link href="events">Afiša</x-navigation.nav-link>
            <x-navigation.nav-link href="services">Izklaide</x-navigation.nav-link>
            <x-navigation.nav-link href="stay">Nakšņošana</x-navigation.nav-link>
            <x-navigation.nav-link href="blog">Blogs</x-navigation.nav-link>
            <x-navigation.nav-link href="gallery">Galerija</x-navigation.nav-link>
        </ul>
    </nav>
</div>