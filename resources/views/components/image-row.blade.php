@props([
    'images' => []
])


<div class="image-row" id="image-row-gallery">
  @foreach ($images as $image)
    <a class="image"
       href="{{url($image["src"])}}"
       data-pswp-width={{$image["width"]}} 
       data-pswp-height={{$image["height"]}}
    >
      <img src={{ asset($image["src"]) }}
           alt="{{$image["alt"]}}"
           loading="lazy"
      >
    </a>
  @endforeach
</div>

<script language="JavaScript" type="module">
  const lightbox = new window.PhotoSwipeLightbox({
    gallery: '#image-row-gallery',
    bgOpacity: 0.9,
    showHideAnimationType: 'fade',
    children: 'a',
    pswpModule: window.photoswipe
  });
  lightbox.init();
</script>