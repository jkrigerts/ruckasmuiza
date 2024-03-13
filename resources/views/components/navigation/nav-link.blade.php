
@props([
    'dark',
    'href'
])

<li>
  <a href="{{route($href)}}" wire:navigate class="{{request()->routeIs($href) ? 'underline' : ''}}">
      {{ $slot }}
  </a>
</li>
