@props([
    'style' => ""
])

<h1 class="section-heading" style="{{$style}}">
  {{ $slot }}
</h1>