
@props([
    'href',
    'items',
    'unchoosable'
])

<li>
  @if (isset($unchoosable))
    <button class="{{request()->routeIs($href.'*') ? 'active' : ''}}">
      {{$slot}}
    </button>  
  @else
    <a href="{{route($href)}}" wire:navigate class="{{request()->routeIs($href.'*') ? 'active' : ''}}">
      {{ $slot }}
    </a>
  @endif
  @isset ($items)
    <ul class="dropdown">
      @foreach ($items as $item)
          <li>
            <a href="{{route($item['href'])}}"  wire:navigate class="{{request()->routeIs($item['href']) ? 'active' : ''}}">
              {{$item['title']}}
            </a>
          </li>
      @endforeach
    </ul>
  @endisset
</li>
