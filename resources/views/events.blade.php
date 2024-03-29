<?php
    //dd($monthsSelect);
?>


<x-layouts.app>

    <section class="main-events">
        <img class="screen-image" src="{{ asset('images/landing/landing7.webp') }}" alt="">
        
        <div class="content">
            <div class="flex-between">
                <p class="header">Ruckas muiža ielūdz!</p>
                <form action="{{ route('events') }}" method="get">
                    <p class="date">
                        <select name="year" onchange="this.form.submit()">
                            @for ($i = now()->year - 2; $i <= now()->year + 2; $i++)
                                <option value="{{ $i }}" @if ($thisYear == $i) selected @endif>{{ $i }}</option>
                                
                            @endfor
                        </select>
                        gada 
                        <select name="month" onchange="this.form.submit()">
                            @foreach ($monthsSelect as $month)
                                <option value="{{ $loop->index + 1}}" @if ($month == $thisMonth) selected @endif>{{ $month }}</option>
                            @endforeach
                        </select>
    
                        <strong>PASĀKUMU KALENDĀRS</strong>
                    </p>
                </form>
            </div>
            <p>Uzziniet vairāk, izvēloties krāsaino datumu</p>

            <table class="calendar-container">
                @foreach ($calendarData as $row)
                    <tr>
                        @foreach ($row as $date => $data)
                            <td>
                                <x-events.day :data="$data"/>
                            </td> 
                        @endforeach
                    </tr>
                @endforeach
                
            </table>

            <p class="footer">Vairāk informācijas Ruckas muižas sociālajos tīklos vai rakstot uz e-pastu 
                <strong><a href="mailto:kultura@ruckasmuiza.lv" class="svelte-1tmxm1l">kultura@ruckasmuiza.lv</a></strong>
                vai zvanot uz tel. 
                <strong><a href="tel:+37129437258" class="svelte-1tmxm1l">+371 28237566</a></strong>
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
</x-layouts.app>