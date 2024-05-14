<x-layouts.app>
  <x-slot:meta>
    <title>{{ $album->title }} - Ruckas muiža</title>

    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $album->title }}" />
    <meta property="og:image" content="{{asset("/storage/" . $album->thumbnail)}}" />
    <meta property="og:description" content='{{$album->description ?? "Apskati Ruckas muižas galeriju!"}}' />
    
  </x-slot:meta>

  <x-background-image
      src="images/landing/landing.webp"
      alt="Ruckas muiža"
      style="--background-image-gradient: linear-gradient(
                                            to bottom,
                                            rgba(0, 0, 0, 0.9) 0%,
                                            rgba(0, 0, 0, 0.8) 50%,
                                            rgba(0, 0, 0, 0.7) 100%
                                        )"
  />
  <main class="single-album">
    <div class="head">
      <x-section-heading>{{ $album->title }}</x-section-heading>
      @isset ($album->description)
        <p>{{ $album->description }}</p>
      @endisset
    </div>

    <section id="album" class="pswp-gallery">
      @foreach ($album->images as $image)
          <a  class="image"
              href="{{url("storage/" . $image)}}"
              data-pswp-width="{{getimagesize("storage/" . $image)[0]}}" 
              data-pswp-height="{{getimagesize("storage/" . $image)[1]}}" 
             
          >
            <img src="{{ url("storage/" . $image) }}" alt="{{ $album->title }}" loading="lazy"/>
          </a>
      @endforeach
    </section>
  </main>
</x-layouts.app>


<script language="JavaScript" type="module">

  const lightbox = new window.PhotoSwipeLightbox({
    gallery: '#album',
    bgOpacity: 0.9,
    showHideAnimationType: 'fade',
    children: 'a',
    pswpModule: window.photoswipe
  });
  lightbox.init();
</script>