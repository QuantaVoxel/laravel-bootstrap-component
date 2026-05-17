@php
    $id = $attributes->get('id', 'card_' . bin2hex(random_bytes(4)));
    $collapseId = $id . '_collapse';

    $headerContent = $header ?? $title;
    $bodyContent = $body ?? $slot;
    $hasRibbon = isset($ribbon);
    $isTriangle = isset($ribbonTriangle);
    $hasHeader = !empty((string) $headerContent) || isset($toolbar) || ($hasRibbon && !$isTriangle);

    $headerClasses = [
        'card-header',
        'collapsible cursor-pointer rotate' => $collapsible,
        'ribbon' => $hasRibbon && !$isTriangle,
        "ribbon-{$ribbonDirection}" => $hasRibbon && !$isTriangle && $ribbonDirection,
        'ribbon-vertical' => $hasRibbon && !$isTriangle && $ribbonVertical,
        'ribbon-clip' => $hasRibbon && !$isTriangle && $ribbonClip,
    ];
@endphp

@if($isTriangle)
<div class="overflow-hidden position-relative card-rounded">
    <div @class([
        'ribbon ribbon-triangle',
        "ribbon-{$ribbonTriangle}",
        "border-{$ribbonColor}" => $ribbonColor
    ])>
        <div @class([
            'ribbon-icon',
            'mt-n5 ms-n6' => str_contains($ribbonTriangle, 'start') && str_contains($ribbonTriangle, 'top'),
            'mt-n5 me-n6' => str_contains($ribbonTriangle, 'end') && str_contains($ribbonTriangle, 'top'),
            'mt-0 ms-n6' => str_contains($ribbonTriangle, 'start') && str_contains($ribbonTriangle, 'bottom'),
            'mt-0 me-n6' => str_contains($ribbonTriangle, 'end') && str_contains($ribbonTriangle, 'bottom'),
        ])>
            {{ $ribbon }}
        </div>
    </div>
@endif

<{{ $tag }} {{ $attributes->merge()->class($cardClasses) }}>
    @if($hasHeader)
        <div @class($headerClasses)
        @if($collapsible)
            data-bs-toggle="collapse"
            data-bs-target="#{{ $collapseId }}"
        @endif
        >
            @if($hasRibbon && !$isTriangle)
                <div @class(['ribbon-label', "bg-{$ribbonColor}" => $ribbonColor])>
                    {{ $ribbon }}
                    @if($ribbonClip)
                        <span class="ribbon-inner bg-{{ $ribbonColor }}"></span>
                    @endif
                </div>
            @endif

            @if(!empty((string) $headerContent))
            <h3 class="card-title">
                {{ $headerContent }}
            </h3>
            @endif

            @if(isset($toolbar))
                <div @class(['card-toolbar', 'rotate-180' => $collapsible])>
                    {{ $toolbar }}
                </div>
            @elseif($collapsible)
                <div class="card-toolbar rotate-180">
                    <i class="ki-duotone ki-down fs-1"></i>
                </div>
            @endif
        </div>
    @endif

    @if($collapsible)
    <div id="{{ $collapseId }}" @class(['collapse', 'show' => $expanded])>
    @endif
        
        @if($withoutBody)
            {{ $bodyContent }}
        @else
            <div @class($bodyClasses)>
                {{ $bodyContent }}
            </div>
        @endif

        @if(isset($footer))
            <div class="card-footer">
                {{ $footer }}
            </div>
        @endif
    @if($collapsible)
    </div>
    @endif
</{{ $tag }}>

@if($isTriangle)
</div>
@endif
