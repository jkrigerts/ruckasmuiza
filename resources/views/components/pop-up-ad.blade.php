  
<div
    class="pop-up-ad"
    x-show="open"
    x-transition
    x-data="{ open: true }"
>
    <div class="pop-up-ad-content" @click.away="open = false">
        {{-- <div @click.stop="open = ! open" class="close-btn">
            <x-icons.x />
        </div> --}}
          <video controls class="living-paintings-discount-video">
            <source src="{{asset('assets/latvijas-dzimsanas-dienas-atlaide.mp4')}}#t=0.001" type="video/mp4">
            Pārlūkprogramma neatbalsta video!
          </video>
    </div>
</div>




