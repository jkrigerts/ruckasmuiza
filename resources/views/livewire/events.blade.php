


    <section class="main-events" >
        <x-background-image src="{{ asset('images/landing/landing.webp') }}" alt="Ruckas muiža" gradient={{false}}/>
        
        <div class="content" x-data="{ show_calendar: true, transition_left: false }" x-init="@this.on('data-updated', () => { show_calendar = true })">

            <div class="calendar-header">
                <x-section-heading>Pasākumu kalendārs</x-section-heading>
                <p>Ruckas muiža piedāvā izbaudīt plašu pasākumu klāstu - atrodi sev aktuālo šajā mēnesī un pavadi īpašus, neaizmirstamus mirkļus vietā, kur senatne sastopas ar mūsdienām.</p>
                <div class="month-switcher">
                    {{-- <div @click="() => {transition_left = true ; show_calendar = false; }" wire:click="down" >
                        <x-icons.caret-left />
                    </div>

                    <p>{{ $thisMonth }} {{ $thisYear }}</p>
                    
                    <div @click="() => {transition_left = false ; show_calendar = false; }" wire:click="up">
                        <x-icons.caret-right />
                    </div> --}}
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
                                <x-events.day :data="$data"/>
                            </td> 
                        @endforeach
                    </tr>
                @endforeach
                
            </table>

            <p class="footer">Vairāk informācijas Ruckas muižas sociālajos tīklos vai rakstot uz e-pastu 
                <strong><a href="mailto:ieva@ruckasmuiza.lv" class="svelte-1tmxm1l">ieva@ruckasmuiza.lv</a></strong>,
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
