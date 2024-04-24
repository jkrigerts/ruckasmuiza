
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
    <a href="{{route($href)}}" wire:navigate class="{{(request()->routeIs($href) || request()->is(ltrim(route($href, [], false), "/") . "/*")) ? 'active' : ''}}">
      {{ $slot }}
    </a>
  @endif
  @isset ($items)
    <ul class="dropdown">
      @foreach ($items as $item)
          <li>
            <a href="{{route($item['href'])}}"  wire:navigate class="{{(request()->routeIs($item['href']) || request()->is(ltrim(route($item['href'], [], false), "/") . "/*")) ? 'active' : ''}}">
              {{$item['title']}}
            </a>
          </li>
      @endforeach
    </ul>
  @endisset
</li>
