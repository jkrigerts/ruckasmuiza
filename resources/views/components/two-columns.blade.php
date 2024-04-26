@props([
    'img_src',
    'img_alt',
    "title",
    'swap' => false
])

<article class="two-columns {{$swap ? "two-columns-swap" : "" }}">
  <div>
    <div class="text">
      @isset($title)
        <h2>{{ $title }}</h2>
      @endisset
      {{ $slot }}
    </div>
    <img src="{{ asset($img_src) }}" alt="{{ $img_alt }}" class="image" />
  </div>
  
</article>