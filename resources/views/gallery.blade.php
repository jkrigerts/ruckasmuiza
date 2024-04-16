<x-layouts.app metaName="gallery">
  <x-background-image src="images/landing/landing.webp" alt="Ruckas muiža" />
  <main class="gallery">
    <div class="head">
      <x-section-heading>Galerija</x-section-heading>
    </div>

    <section>
      @foreach ($albums as $album)
        <article class="album">
          <a href="{{url("galerija/" . $album->id)}}" wire:navigate>
            <img src="{{ url("storage/" . $album->thumbnail) }}" alt="{{ $album->title }}"/>
            <h2>{{$album->title}}</h2>
          </a>
        </article>
      @endforeach
    </section>
  </main>
</x-layouts.app>