
@props([
    'dark',
    'href'
])

<li>
  <a href="{{route($href)}}" wire:navigate class="uppercase text-white hover:text-lightgray transition {{request()->routeIs($href) ? 'underline' : ''}}">
      {{ $slot }}
  </a>
</li>
