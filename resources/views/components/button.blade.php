<{{ $type }}
{{ $attributes->merge()->class($class)}}
>
@if($icon)
    <x-bootstrap::icon name="{{ $icon }}" class="fs-{{ $iconSize }} {{ $iconOnly ?: 'me-2' }} "/>
@endif
@if(!$iconOnly)
    {{ $slot }}
@endif
</{{$type}}>
