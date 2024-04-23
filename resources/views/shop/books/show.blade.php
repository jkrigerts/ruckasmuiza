<x-layouts.app>
  <x-slot:meta>
    <title>{{ $book->title }} - Ruckas muiža</title>

    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $book->title }}" />
    <meta property="og:image" content="{{asset("/images/meta_image.png")}}" />
    <meta property="og:description" content='Ruckas muiža piedāvā iegādāties grāmatu "{{ $book->title }}"{{$book->author ? ", autors: $book->author" : "" }}' />
    
  </x-slot:meta>

  <x-background-image src="images/landing/landing.webp" alt="Ruckas muiža" />
  <main class="book-simple-page">
    <div class="head">
      <x-section-heading>{{ $book->title }}</x-section-heading>
    </div>

    <section>
      {{-- Safari Mobile has a weird issue where tables are lagging because of ::before,
        so this is a workaround :D --}}
      <div class="bg"></div> 
      <div class="book-show">
        <div>
          <img src='{{ url("storage/" . $book->image) }}' alt="{{$book->title}}">
          <div class="text">
            <p>Nosaukums: <strong>{{ $book->title }}</strong></p>
            @isset ($book->author)
              <p>Autors: <strong>{{ $book->author }}</strong></p>
            @endisset
            <p>Cena: <strong>{{ $book->price }} €</strong></p>
            <p>Pieejama{{$book->count_available != 1 ? "s" : ""}} <strong>{{ $book->count_available }}</strong> grāmata{{$book->count_available != 1 ? "s" : ""}}</p>
            <x-button-link href="{{ route('contacts') }}" text="Sazināties"/>
          </div>
        </div>
      </div>
    </section>
  </main>
</x-layouts.app>