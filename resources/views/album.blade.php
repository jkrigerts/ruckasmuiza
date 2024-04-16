<x-layouts.app metaName="gallery">
  <x-background-image src="images/landing/landing.webp" alt="Ruckas muiža" />
  <main class="single-album">
    <div class="head">
      <x-section-heading>{{ $album->title }}</x-section-heading>
      <p>{{ $album->description }}</p>
    </div>

    <section>
      @foreach ($album->images as $image)
          <div class="image">
            <img src="{{ url("storage/" . $image) }}" alt="{{ $album->title }}"/>
          </div>
      @endforeach
    </section>
  </main>
</x-layouts.app>