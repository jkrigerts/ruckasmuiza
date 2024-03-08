<div>
    <nav class="flex gap-8 bg-black">
        <a href="{{ route('landing') }}" wire:navigate class="">
            <img src="{{ asset('images/logo.png') }}" alt="Ruckas muižas logo" class="block h-24 w-auto">
        </a>
        <ul class="mt-4 flex gap-8">
            <li><a href="{{ route('about') }}" wire:navigate class="uppercase text-white hover:text-lightgray transition {{request()->routeIs('about') ? 'underline' : ''}}">Par muižu</a></li>
            <li><a href="{{ route('events') }}" wire:navigate class="uppercase text-white hover:text-lightgray transition {{request()->routeIs('events') ? 'underline' : ''}}">Afiša</a></li>
            <li><a href="{{ route('services') }}" wire:navigate class="uppercase text-white hover:text-lightgray transition {{request()->routeIs('services') ? 'underline' : ''}}">Izklaide</a></li>
            <li><a href="{{ route('stay') }}" wire:navigate class="uppercase text-white hover:text-lightgray transition {{request()->routeIs('stay') ? 'underline' : ''}}">Nakšņošana</a></li>
            <li><a href="{{ route('blog') }}" wire:navigate class="uppercase text-white hover:text-lightgray transition {{request()->routeIs('blog') ? 'underline' : ''}}">Blogs</a></li>
            <li><a href="{{ route('gallery') }}" wire:navigate class="uppercase text-white hover:text-lightgray transition {{request()->routeIs('gallery') ? 'underline' : ''}}">Galerija</a></li>
        </ul>
    </nav>
</div>