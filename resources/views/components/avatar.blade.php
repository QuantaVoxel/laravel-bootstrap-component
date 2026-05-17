<div {{ $attributes->merge()->class($symbolClasses) }}>
    @if($image)
        <img src="{{ $image }}" alt="{{ $label ?? '' }}"/>
    @elseif($bgImage)
        <div class="symbol-label" style="background-image:url('{{ $bgImage }}')"></div>
    @else
        <div @class([
            'symbol-label fs-2 fw-semibold',
            "bg-{$color} text-inverse-{$color}" => $color,
            "text-{$textColor}" => $textColor && !$color
        ])>
            {{ $label ?? $slot }}
        </div>
    @endif

    @if($badge)
        <span class="symbol-badge badge badge-circle bg-{{ $badgeColor }} {{ $badgePosition }}">
            {{ $badge === true ? '' : $badge }}
        </span>
    @endif
</div>
