  
<div
    class="pop-up-ad"
    x-show="openAd"
    x-transition
    x-data="{openAd: true}"
>
    <div class="pop-up-ad-content" @click.away="openAd = false">
        {{-- <div @click.stop="open = ! open" class="close-btn">
            <x-icons.x />
        </div> --}}
          <video controls autoplay loop class="living-paintings-discount-video">
            <source src="{{asset('assets/latvijas-dzimsanas-dienas-atlaide.mp4')}}#t=0.001" type="video/mp4">
            Pārlūkprogramma neatbalsta video!
          </video>
    </div>
</div>




