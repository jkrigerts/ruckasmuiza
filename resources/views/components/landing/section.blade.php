<section class="landing-section-wrapper {{isset($fade) ? 'no-fade' : ''}}" id="{{ $id }}">
    <img class="screen-image" src="{{ asset($bgImage) }}" alt="">
    <div class="content">
        <div class="grid-wrapper">
            @isset($right)
                <div></div>
            @endisset

            <div class="card-wrapper">
                <div class="grid-content">
                    <x-landing.icon-repeat :icon="$icon" />
                    <h2>{{ $title }}</h2>
                    {!! $description !!}
                </div>
                @isset ($link)
                    <a class="landing-button" href={{route($link)}} wire:navigate>{{ $linkText ?? "Uzzināt vairāk"}}</a>
                @endisset
            </div>
        </div>
    </div>
</section>
