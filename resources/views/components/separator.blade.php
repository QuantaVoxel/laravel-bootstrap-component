<div {{ $attributes->class([
    'separator',
    'separator-content' => $slot->isNotEmpty(),
    "border-{$size}" => $size,
    "border-{$color}" => $color,
    "separator-{$style}" => $style,
]) }}>
    {{ $slot }}
</div>
