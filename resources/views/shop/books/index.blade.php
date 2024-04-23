<x-layouts.app metaName="books">
  <x-background-image src="images/landing/landing.webp" alt="Ruckas muiža" />
  <main class="books">
    <div class="head">
      <x-section-heading>Grāmatas</x-section-heading>
    </div>

    @if(count($books) == 0)
        <p class="error">Neviena grāmata vēl nav pievienota</p>
    @endif

    <section>
      @foreach ($books as $book)
        <article class="book">
          <a href="{{url("piedavajumi/gramatas/" . $book->id)}}" wire:navigate>
            <img src="{{ url("storage/" . $book->image) }}" alt="{{ $book->title }}"/>
            <div class="book-info">
                <h2>{{$book->title}}</h2>
                @isset($book->author)
                  <p>{{$book->author}}</p>
                @endisset
            </div>
          </a>
        </article>
      @endforeach
    </section>
    <div class="paginate">{{ $books->links() }}</div>
  </main>
</x-layouts.app>