@props([
    'img_src',
    'img_alt',
    'swap' => false
])

<article class="two-columns {{$swap ? "two-columns-swap" : "" }}">
  <x-inner-chapter-heading>{{ $title }}</x-inner-chapter-heading>
  <div>
    <div class="text">
      {{ $slot }}
    </div>
    <div class="image">
      <img src="{{ asset($img_src) }}" alt="{{ $img_alt }}">
    </div>
  </div>
  
</article>