<div>
    <main class="books">
        <div class="head">
          <x-section-heading>Grāmatas</x-section-heading>

          <div class="search">
            <form wire:submit="search">
              <label for="filter-book">
                Meklēt pēc nosaukuma vai autora: 
              </label>
              <div>
                <input type="text" wire:model="query" id="filter-book">
                <button type="submit">Meklēt</button>
              </div>
            </form>
          </div>
          
        </div>
    
        @if(count($books) == 0)
            <p class="error">Neviena grāmata nav atrasta</p>
        @endif
    
        <section>
          @foreach ($books as $book)
            <article class="book" wire:key="{{ $book->id }}">
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
</div>