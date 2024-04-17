@props([
    'img_src',
    'img_alt',
    'swap' => false
])

<article class="two-columns {{$swap ? "two-columns-swap" : "" }}">
  <div>
    <div class="text">
      <h2>{{ $title }}</h2>
      {{ $slot }}
    </div>
    <img src="{{ asset($img_src) }}" alt="{{ $img_alt }}" class="image" />
  </div>
  
</article>