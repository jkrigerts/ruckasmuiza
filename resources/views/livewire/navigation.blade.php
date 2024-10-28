<header x-data="mobilenavopener">
    <div>
        <a href="{{ route('landing') }}" wire:navigate class="logo-link">
            @persist('logo')
                <img src="{{ asset('images/logo.png') }}" alt="Ruckas muižas logo">
            @endpersist
        </a>
        <nav  :class="open ? 'mobile-navigation' : ''">
            <ul>
                <x-navigation.nav-link href="trattoria." unchoosable
                                       :items="[
                                        ['title' => 'Ēdienkarte', 'href' => 'trattoria.edienkarte'],
                                        ['title' => 'Piegāde', 'href' => 'trattoria.piegade'],
                                        ['title' => 'Darba laiks', 'href' => 'trattoria.darba_laiks'],
                                        ['title' => 'Par mums', 'href' => 'trattoria.par_mums'],
                                        ]"
                >Trattoria</x-navigation.nav-link>
                <x-navigation.nav-link href="events">Pasākumi</x-navigation.nav-link>
                <x-navigation.nav-link href="living-paintings."
                                       :items="[
                                        ['title' => 'Mīts – Cilvēks – Daba', 'href' => 'living-paintings.myth'],
                                        ['title' => 'Manas iedvesmas dārzi', 'href' => 'living-paintings.gardens'],
                                        ['title' => 'Latvijas skolas soma', 'href' => 'living-paintings.school-bag'],
                                        ]"
                >Dzīvās gleznas</x-navigation.nav-link>
                <x-navigation.nav-link href="services."
                                       :items="[
                                        ['title' => 'Nakšņošana', 'href' => 'services.stay'],
                                        ['title' => 'Svinības', 'href' => 'services.celebrations'],
                                        ['title' => 'Fotosesija', 'href' => 'services.photo_session'],
                                        ['title' => 'Gleznošana ar Baibu Feoktistovu', 'href' => 'services.painting_classes'],
                                        ['title' => 'Grāmatu veikals', 'href' => 'services.books'],
                                        ['title' => 'Dāvanu kartes', 'href' => 'services.gift_cards'],
                                        ]"
                >Pakalpojumi</x-navigation.nav-link>
                <x-navigation.nav-link href="blog."
                                       unchoosable
                                       :items="[
                                        ['title' => 'Renāra Sproģa dienasgrāmata', 'href' => 'blog.sprogis'],
                                        // ['title' => 'Jāņa Gabrāna piezīmes', 'href' => 'blog.gabrans'],
                                        ]"
                >Muiža runā</x-navigation.nav-link>
                <x-navigation.nav-link href="gallery">Galerija</x-navigation.nav-link>
                <x-navigation.nav-link href="contacts">Kontakti</x-navigation.nav-link>
                <x-navigation.nav-link href="about">Par muižu</x-navigation.nav-link>
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

    Alpine.data('modal', (initialOpenState) => ({
        open: initialOpenState.open,
        event: null,

        handleOpen() {
            const url = new URL(window.location.href);
            url.searchParams.set('event', this.event.id);
            window.history.pushState({}, '', url);
            this.open = ! this.open;
            document.title = `${this.event.title} - Ruckas muiža`;

        },

        handleClose() {
            const url = new URL(window.location.href);
            url.searchParams.delete("event");
            window.history.pushState({}, '', url);
            this.open = ! this.open;
            document.title = `Pasākumi - Ruckas muiža`
        }
    }))
</script>
@endscript