@props([
    'img_src',
    'img_alt',
    "title",
    'swap' => false,
    'style' => "",
    'style_outer' => ""
])

<article class="two-columns {{$swap ? "two-columns-swap" : "" }}" style={{$style_outer}}>
  <div style={{ $style }}>
    <div class="text">
      @isset($title)
        <h2>{{ $title }}</h2>
      @endisset
      {{ $slot }}
    </div>
    @isset($img_src)
      <img src="{{ asset($img_src) }}" alt="{{ $img_alt }}" class="image" />
    @else
      <div class="text second">
        {{ $second_slot }}
      </div>
    @endisset
  </div>
  
</article>