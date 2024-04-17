<div class="icon-repeat-wrapper">
    @for ($i = 0; $i < 9; $i++)
        @php
            $fill = ($i == 4) ? 'white' : (($i % 2 == 0) ? '#272123' : '#2D2628');
        @endphp
        @component($icon, ['attributes' => "fill={$fill}"])
        @endcomponent
    @endfor
</div>

