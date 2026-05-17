@php
    $id = $attributes->get('id', 'card_' . bin2hex(random_bytes(4)));
    $collapseId = $id . '_collapse';

    $headerContent = $header ?? $title;
    $bodyContent = $body ?? $slot;
    $hasHeader = !empty((string) $headerContent) || isset($toolbar);
@endphp

<{{ $tag }} {{ $attributes->merge()->class($cardClasses) }}>
    @if($hasHeader)
        <div @class([
            'card-header',
            'collapsible cursor-pointer rotate' => $collapsible
        ])
        @if($collapsible)
            data-bs-toggle="collapse"
            data-bs-target="#{{ $collapseId }}"
        @endif
        >
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
