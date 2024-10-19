<div id="pizza" style="margin-top:5.5rem">
  <div class="trattoria-image-row">
    <a class="trattoria-image"
        href="{{url("images/trattoria/trattoria_01.webp")}}"
        data-pswp-width="1200" 
        data-pswp-height="1714"
      >
      <img src={{ asset("images/trattoria/trattoria_01.webp") }}
          alt="Ruckas muižas Trattoria ceptā pica"
          loading="lazy"
      >
    </a>
    <a class="trattoria-image"
        href="{{url("images/trattoria/trattoria_17.webp")}}"
        data-pswp-width="1200" 
        data-pswp-height="1714"
      >
      <img src={{ asset("images/trattoria/trattoria_17.webp") }}
          alt="Ruckas muižas Trattoria ceptā pica"
          loading="lazy"
      >
    </a>
    <a class="trattoria-image"
        href="{{url("images/trattoria/trattoria_11.webp")}}"
        data-pswp-width="1200" 
        data-pswp-height="1714"
      >
      <img src={{ asset("images/trattoria/trattoria_11.webp") }}
          alt="Ruckas muižas Trattoria ceptā pica"
          loading="lazy"
      >
    </a>
    <a class="trattoria-image"
        href="{{url("images/trattoria/trattoria_05.webp")}}"
        data-pswp-width="1200" 
        data-pswp-height="1714"
      >
      <img src={{ asset("images/trattoria/trattoria_05.webp") }}
          alt="Ruckas muižas Trattoria ceptā pica"
          loading="lazy"
      >
    </a>
    

  </div>
</div>

<script language="JavaScript" type="module">

  const lightbox = new window.PhotoSwipeLightbox({
    gallery: '#pizza',
    bgOpacity: 0.9,
    showHideAnimationType: 'fade',
    children: '.trattoria-image',
    pswpModule: window.photoswipe
  });
  lightbox.init();
</script>