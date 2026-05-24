@aware(['parentId','hasIcon', 'openIcon','closeIcon'])

<div {{ $attributes->merge()->class([
    "mb-5" => $hasIcon,
    "accordion-item" => !$hasIcon,
]) }}>
    <!--begin::Header-->
    <div class="accordion-header py-3 d-flex {{ $active ? '' : 'collapsed' }} " data-bs-toggle="collapse"
         data-bs-target="#{{ $itemId }}">
        @if($hasIcon)

            <span class="accordion-icon">
                <x-bootstrap::icon :name="$openIcon" class="fs-3 accordion-icon-off"/>
                <x-bootstrap::icon :name="$closeIcon" class="fs-3 accordion-icon-on"/>
            </span>
            <h3 class="fs-4 fw-semibold mb-0 ms-4">{{ $title }}</h3>
@else
            <button class="accordion-button fs-4 fw-semibold {{ $active ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse"
                    data-bs-target="#{{ $itemId }}" aria-expanded="{{ $active ? 'true' : 'false' }}" aria-controls="{{ $itemId }}">
                {{ $title }}
            </button>
        @endif

    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div id="{{ $itemId }}" class="fs-6 collapse  {{ $active ? 'show' : '' }} ps-10" data-bs-parent="#{{ $parentId }}">
        @if($hasIcon)
            {{ $slot }}
        @else
            <div class="accordion-body">
                {{ $slot }}
            </div>
        @endif
    </div>
    <!--end::Body-->
</div>
