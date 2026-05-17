@php
    $idPrefix = $attributes->get('id', 'rating_' . bin2hex(random_bytes(4)));
    $inputName = $name ?? $idPrefix;
@endphp

<div {{ $attributes->merge(['class' => 'rating']) }}>
    @if($edit)
        @if($showReset)
            <label class="btn btn-light fw-bold btn-sm rating-label me-3" for="{{ $idPrefix }}_0">
                Reset
            </label>
            <input class="rating-input" name="{{ $inputName }}" value="0" type="radio" id="{{ $idPrefix }}_0" @checked($value == 0)/>
        @endif

        @for($i = 1; $i <= $max; $i++)
            <label class="rating-label" for="{{ $idPrefix }}_{{ $i }}">
                <x-bootstrap::icon :name="$icon" class="fs-1" />
            </label>
            <input class="rating-input" name="{{ $inputName }}" value="{{ $i }}" type="radio" id="{{ $idPrefix }}_{{ $i }}" @checked($value == $i)/>
        @endfor
    @else
        @for($i = 1; $i <= $max; $i++)
            @php
                $isChecked = $i <= $value;
            @endphp
            <div @class(['rating-label', 'checked' => $isChecked])>
                <x-bootstrap::icon :name="$icon" class="fs-1 {{ $isChecked ? 'text-'.$iconColor : 'text-muted' }}" />
            </div>
        @endfor
    @endif
</div>
