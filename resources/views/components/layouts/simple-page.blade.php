@props([
    'bg_src',
    'bg_alt'
])

<x-layouts.app>
  <x-background-image src="{{ asset($bg_src) }}" alt="{{$bg_alt}}" />
  <main class="simple-page">
    <div class="head">
      <x-section-heading>{{ $title }}</x-section-heading>
    </div>

    <section>
      {{-- Safari Mobile has a weird issue where tables are lagging because of ::before,
        so this is a workaround :D --}}
      <div class="bg"></div> 
      {{ $slot }}
    </section>
  </main>
</x-layouts.app>