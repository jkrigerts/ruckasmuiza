@props([
    'src',
    'alt',
    'style' => "",
    'gradient' => true
])

<div class="section-background-image {{$gradient ? "with-gradient" : ""}}" style="{{$style}}">
  <img src="{{ url($src) }}" alt="{{$alt}}">
</div>