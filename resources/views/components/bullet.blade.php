@props([
    'color' => null,
    'dot' => false,
    'vertical' => false,
    'line' => false,
    'h' => null,
    'w' => null,
    'text' => null,
    'margin' => 5,
])
<span
{{ $attributes->merge()->class([
    "bullet",
    "me-{$margin}",
    "bg-{$color}" => $color,
    "bullet-dot" => $dot,
    "bullet-vertical" => $vertical,
    "bullet-line" => $line,
    "h-{$h}"=>$h,
    "w-{$w}"=>$w,
])}}
></span>{{ $text }}