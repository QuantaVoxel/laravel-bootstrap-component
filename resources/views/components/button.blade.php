<{{ $type }}
{{ $attributes->merge()->class($class)}}
>
@if($icon)
    <x-bootstrap::icon name="{{ $icon }}" class="fs-{{ $iconSize }} {{ $iconOnly ?: 'me-2' }} "/>
@endif
@if(!$iconOnly)
    {{ $slot }}
@endif

@if($withBadge)
    <x-bootstrap::badge
            :color="$badgeColor"
            :text="$badgeText"
            :shape="$badgeShape"
            :class="$badgeClass"
            :size="$badgeSize"
            :outline="$badgeOutline"
            :light="$badgeLight"
    />
@endif
</{{$type}}>
