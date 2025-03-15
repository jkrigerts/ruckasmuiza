<x-layouts.app>
  <x-slot:meta>
    <title>{!! $event->title !!} - Ruckas muiža</title>

    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $event->title }}" />
    <meta property="og:image" content="{{ url("storage/" . $event->image) }}" />
    <meta property="og:description" content='Pasākums Ruckas muižā! {{$event->info}}. {{trim($date)}} plkst. {{ str_replace( ":", ".", $event->time) }}' />
    
  </x-slot:meta>

  <x-background-image src="images/landing/landing.webp" alt="Ruckas muiža" />
  <main class="book-simple-page">
    <div class="head">
      <x-section-heading style="--heading-decrease-size: {{strlen($event->title) > 30 ? round(strlen($event->title) / 100, 1) : '0'}}rem">{!! $event->title !!}</x-section-heading>
    </div>

    <section>
      {{-- Safari Mobile has a weird issue where tables are lagging because of ::before,
        so this is a workaround :D --}}
      <div class="bg"></div> 
      <div class="book-show">
        <div>
          @if ($event->image)
            <img src='{{ url("storage/" . $event->image) }}' alt="{!! $event->title !!}">
          @endif
          <div class="text">
            <p style="margin-bottom: 0"><strong style="font-size: 1.4rem">{{$event->info}}</strong></p>
            <p><strong>{{trim($date)}} plkst. {{ str_replace( ":", ".", $event->time) }}</strong></p>
            {!! $event->infoLong !!}
          </div>
        </div>
      </div>
      {!! $event->description !!}
      <div>
        {!! $event->notes !!}
      </div>
    </section>
  </main>
</x-layouts.app>