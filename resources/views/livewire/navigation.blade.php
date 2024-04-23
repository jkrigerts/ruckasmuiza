<header x-data="mobilenavopener">
    <div>
        <a href="{{ route('landing') }}" wire:navigate class="logo-link">
            @persist('logo')
                <img src="{{ asset('images/logo.png') }}" alt="Ruckas muižas logo">
            @endpersist
        </a>
        <nav  :class="open ? 'mobile-navigation' : ''">
            <ul>

                <x-navigation.nav-link href="landing">Sākums</x-navigation.nav-link>
                <x-navigation.nav-link href="about">Par muižu</x-navigation.nav-link>
                <x-navigation.nav-link href="services."
                                       :items="[
                                        ['title' => 'Nakšņošana', 'href' => 'services.stay'],
                                        ['title' => 'Kāzas', 'href' => 'services.weddings'],
                                        ['title' => 'Svinības', 'href' => 'services.celebrations'],
                                        ['title' => 'Telpu noma', 'href' => 'services.rent'],
                                        ['title' => 'Ekskursija', 'href' => 'services.excursion'],
                                        ]"
                >Pakalpojumi</x-navigation.nav-link>
                <x-navigation.nav-link href="events">Pasākumi</x-navigation.nav-link>
                <x-navigation.nav-link href="offers."
                                       unchoosable
                                       :items="[
                                        ['title' => 'Grāmatas', 'href' => 'offers.books'],
                                        ['title' => 'Dāvanu kartes', 'href' => 'offers.gift_cards'],
                                        ['title' => 'Īpašie piedāvājumi', 'href' => 'offers.special_offers']
                                        ]"
                >Piedāvājumi</x-navigation.nav-link>
                <x-navigation.nav-link href="blog."
                                       unchoosable
                                       :items="[
                                        ['title' => 'Aktualitātes', 'href' => 'blog.news'],
                                        ['title' => 'Renārs Sproģis runā', 'href' => 'blog.sprogis'],
                                        ['title' => 'Jāņa Gabrāna piezīmes', 'href' => 'blog.gabrans'],
                                        ]"
                >Muiža runā</x-navigation.nav-link>
                <x-navigation.nav-link href="gallery">Galerija</x-navigation.nav-link>
                <x-navigation.nav-link href="contacts">Kontakti</x-navigation.nav-link>
            </ul>
        </nav>
        <button x-on:click="toggleOpen" class="hamburger">
            <x-navigation.hamburger x-show="!open"></x-navigation.hamburger>
            <x-navigation.close x-show="open"></x-navigation.close>
        </button>
    </div>
</header>

@script
<script>
    Alpine.data('mobilenavopener', () => {
        return {
            open: 0,
            toggleOpen() {
                this.open = !this.open;
                document.body.style.overflow = this.open ? "hidden" : "auto";
            },
        }
    })
</script>
@endscript