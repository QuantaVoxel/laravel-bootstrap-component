@aware([
    'logo' => 'https://placehold.co/400',
    'banner' => 'https://placehold.co/600x400',
    'asideTitle' => 'Fast, Efficient and Productive',
])
<div class="d-flex flex-column flex-lg-row flex-column-fluid">

    <!--begin::Body-->
    <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
        <!--begin::Form-->
        <div class="d-flex flex-center flex-column flex-lg-row-fluid">
            <!--begin::Wrapper-->
            <div class="w-lg-500px p-10">
                {{ $slot }}
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Form-->

        @isset($footer)
            <!--begin::Footer-->
            <div class="w-lg-500px d-flex flex-stack px-10 mx-auto">
                {{ $footer }}
            </div>
            <!--end::Footer-->
        @endisset
    </div>
    <!--end::Body-->

    <!--begin::Aside-->
    <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2"
         style="background-image: url(../../../assets/media/misc/auth-bg.png)">
        <!--begin::Content-->
        <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
            <!--begin::Logo-->
            <div class="mb-0 mb-lg-12">
                <img alt="Logo" src="{{ $logo }}" class="h-60px h-lg-75px"/>
            </div>
            <!--end::Logo-->

            <!--begin::Image-->
            <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20"
                 src="{{ $banner }}" alt=""/>
            <!--end::Image-->

            <!--begin::Title-->
            <h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">
                {{ $asideTitle }}
            </h1>
            <!--end::Title-->

            <!--begin::Text-->
            <div class="d-none d-lg-block text-white fs-base text-center">
                @isset($asideText)
                    {{ $asideText }}
                @endisset
            </div>
            <!--end::Text-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Aside-->
</div>