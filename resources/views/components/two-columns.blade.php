@props([
    'img_src',
    'img_alt',
    'swap' => false
])

<article class="two-columns {{$swap ? "two-columns-swap" : "" }}">
  <h2>{{ $title }}</h2>
  <div>
    <div class="text">
      {{ $slot }}
    </div>
    <div class="image">
      <img src="{{ asset($img_src) }}" alt="{{ $img_alt }}">
    </div>
  </div>
  
</article>