@php
    use Carbon\Carbon;
@endphp

<x-slot:meta>
    <title>{{$eventFromDB ? $eventFromDB["title"] : "Pasākumi"}} - Ruckas muiža</title>

    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{$eventFromDB ? $eventFromDB["title"] : "Pasākumi"}} - Ruckas muiža" />
    <meta property="og:image" content="{{asset("/images/meta_image.png")}}" />
    <meta property="og:description" content="
        @if ($eventFromDB)
            {{ Carbon::parse($eventFromDB['happens_at'])->format('Y') }}. gada {{ Carbon::parse($eventFromDB['happens_at'])->day }}. {{ Carbon::parse($eventFromDB['happens_at'])->translatedFormat('F') }}
             plkst. {{$eventFromDB['time']}}
             {{-- {{ $eventFromDB['infoLong'] != '' ? $eventFromDB['infoLong'] : $eventFromDB['info'] }} --}}
        @else
            Ruckas muiža piedāvā izbaudīt plašu pasākumu klāstu – atrodi sev aktuālo šajā mēnesī un pavadi īpašus, neaizmirstamus mirkļus vietā, kur senatne sastopas ar mūsdienām.
        @endif
    " />
    
  </x-slot:meta>


    <section class="main-events" >
        <x-background-image src="{{ asset('images/landing/landing.webp') }}" alt="Ruckas muiža" gradient={{false}}/>
        
        <div class="content" x-data="{ show_calendar: true, transition_left: false }" x-init="@this.on('data-updated', () => { show_calendar = true })">

            <div class="calendar-header">
                <x-section-heading>Pasākumu kalendārs</x-section-heading>
                <p>
                    Ruckas muiža piedāvā izbaudīt plašu pasākumu klāstu - atrodi sev aktuālo šajā mēnesī un
                    pavadi īpašus, neaizmirstamus mirkļus vietā, kur senatne sastopas ar mūsdienām.
                </p>
                
                
                @if(count($pinned) > 0)
                    <section class="pinned-event-section">
                        @foreach ($pinned as $pin)
                            <article class="pinned-event" wire:key="{{ $pin["id"] }}">
                            <a href="{{ route('event', ['id' => $pin["id"]]) }}" wire:navigate>
                                @if ($pin["image"])
                                    <img src="{{ url("storage/" . $pin["image"]) }}" alt="{{ $pin["title"] }}"/>
                                @endif
                                <div class="pinned-event-info">
                                    <h2>{!! $pin["title"] !!}</h2>
                                    <p>{{Carbon::parse($pin["happens_at"])->translatedFormat('Y.') . " gada " . Carbon::parse($pin["happens_at"])->translatedFormat('j. M ')}} plkst. {{ str_replace( ":", ".", $pin["time"]) }}</p>
                                </div>
                            </a>
                            </article>
                        @endforeach
                    </section>
                @endif

                <div class="month-switcher">

                    <a href="{{url("/pasakumi?monthOffset=") . ($monthOffset - 1)}}" wire:navigate>
                        <x-icons.caret-left />
                    </a>

                    <p>{{ $thisMonth }} {{ $thisYear }}</p>
                    
                    <a href="{{url("/pasakumi?monthOffset=") . ($monthOffset + 1)}}" wire:navigate>
                        <x-icons.caret-right />
                    </a>
                </div>
            </div>
            <p class="explanation">Uzziniet vairāk, izvēloties krāsaino datumu</p>
            <table class="calendar-container" 
                :class="show_calendar 
                    ? transition_left ? 'calendar-enter-down' : 'calendar-enter-up'
                    : transition_left ? 'calendar-leave-down' : 'calendar-leave-up'
                "
            >
                @foreach ($calendarData as $row)
                    <tr >
                        @foreach ($row as $date => $data)
                            <td>
                                <x-events.day :data="$data" :eventurl="$event"/>
                            </td> 
                        @endforeach
                    </tr>
                @endforeach
                
            </table>

            <p class="footer">Vairāk informācijas Ruckas muižas sociālajos tīklos vai rakstot uz e-pastu 
                <strong><a href="mailto:madara@ruckasmuiza.lv" class="svelte-1tmxm1l">madara@ruckasmuiza.lv</a></strong>,
                vai zvanot uz tel. 
                <strong><a href="tel:+37128237566" class="svelte-1tmxm1l">+371 28237566</a></strong>
            </p>

            <div class="social-media">
                <a href="https://www.facebook.com/profile.php?id=61551705841167" target="_blank" rel="noopener noreferrer">
                    <x-icons.facebook />
                </a>
                <a href="https://instagram.com/ruckas.muiza?igshid=OGQ5ZDc2ODk2ZA==" target="_blank" rel="noopener noreferrer">
                    <x-icons.instagram />
                </a>
            </div>
        </div>
    </section>
