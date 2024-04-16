@props([
    'src',
    'alt',
    'gradient' => true
])

<div class="section-background-image {{$gradient ? "with-gradient" : ""}}">
  <img src="{{ url($src) }}" alt="{{$alt}}">
</div>