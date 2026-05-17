<!--begin::Alert-->
<div {{ $attributes->merge()->class($class) }}  >
    @if(!$withoutIcon)
    <x-bootstrap::icon :name="$icon" class="fs-2hx me-4 text-{{ $iconColor }}"/>
    @endif

    <!--begin::Wrapper-->
    <div class="d-flex flex-column">
        <!--begin::Title-->
        <h4 class="mb-1 text-{{ $titleColor }} ">{{ $title }}</h4>
        <!--end::Title-->

        <!--begin::Content-->
        {{ $description }}
        <!--end::Content-->
    </div>
    <!--end::Wrapper-->

    @if($dismissible)
        <button type="button"
                class=" position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
                data-bs-dismiss="alert">
            <i class="ki-duotone ki-cross fs-1 text-{{ $dismissibleColor }}"><span class="path1"></span><span class="path2"></span></i>
        </button>
    @endif

</div>
<!--end::Alert-->