<div
     {{ $attributes->merge()->class([
    "accordion",
    "accordion-icon-toggle" => $animated,
    "accordion-icon-collapse"
]) }}
     id="{{ $parentId }}" >
    {{ $slot }}
</div>