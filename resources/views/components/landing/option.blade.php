<button 
    class="option" 
    @click="document.querySelector('#{{ $link }}')
        .scrollIntoView({ behavior: 'smooth' })"
>
    @component($icon)
    @endcomponent
    <p>{{ $title }}</p>
</button>
