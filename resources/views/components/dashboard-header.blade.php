<div id="kt_app_header" class="app-header "

     data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}"
     data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '0'}"
     data-kt-sticky-animation="false">

    <!--begin::Header container-->
    <div class="app-container  container-fluid d-flex align-items-stretch justify-content-between "
         id="kt_app_header_container">

        <!--begin::Sidebar mobile toggle-->
        <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                <i class="ki-duotone ki-abstract-14 fs-2 fs-md-1"><span class="path1"></span><span
                            class="path2"></span></i></div>
        </div>
        <!--end::Sidebar mobile toggle-->


        <!--begin::Mobile logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="{{ config('bootstrap-component.routes.dashboard') }}" class="d-lg-none">
                <img alt="Logo" src="{{ config('bootstrap-component.logo-small') }}" class="h-30px"/>
            </a>
        </div>
        <!--end::Mobile logo-->

        <!--begin::Header wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1"
             id="kt_app_header_wrapper">

            <!--begin::Menu wrapper-->
            <div
                    class="
        app-header-menu
        app-header-mobile-drawer
        align-items-stretch
    "

                    data-kt-drawer="true"
                    data-kt-drawer-name="app-header-menu"
                    data-kt-drawer-activate="{default: true, lg: false}"
                    data-kt-drawer-overlay="true"
                    data-kt-drawer-width="250px"
                    data-kt-drawer-direction="end"
                    data-kt-drawer-toggle="#kt_app_header_menu_toggle"

                    data-kt-swapper="true"
                    data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                    data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}"
            >
                <!--begin::Menu-->
                <div
                        class="
            menu
            menu-rounded
            menu-column
            menu-lg-row
            my-5
            my-lg-0
            align-items-stretch
            fw-semibold
            px-2 px-lg-0
        "

                        id="kt_app_header_menu"
                        data-kt-menu="true"
                >

                    @foreach($menu as $item)
                        @if(isset($item['sub']) && !empty($item['sub']))
                            @php
                                $isSubActive = collect($item['sub'])->contains(function($subItem) {
                                    $path = ltrim(parse_url($subItem['url'] ?? '', PHP_URL_PATH), '/');
                                    return request()->fullUrlIs($subItem['url'] ?? '') || ($path === '' ? request()->is('/') : request()->is($path));
                                });
                            @endphp
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2 {{ $isSubActive ? 'here show' : '' }}">
                                <span class="menu-link"><span class="menu-title">{{ $item['title'] }}</span><span class="menu-arrow d-lg-none"></span></span>
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
                                    @foreach($item['sub'] as $subItem)
                                        @php
                                            $subPath = ltrim(parse_url($subItem['url'] ?? '', PHP_URL_PATH), '/');
                                            $isCurrentSub = request()->fullUrlIs($subItem['url'] ?? '') || ($subPath === '' ? request()->is('/') : request()->is($subPath));
                                        @endphp
                                        <div class="menu-item">
                                            <a class="menu-link {{ $isCurrentSub ? 'active' : '' }}" href="{{ $subItem['url'] ?? '#' }}">
                                                <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                                <span class="menu-title">{{ $subItem['title'] }}</span>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @else
                            @php
                                $itemUrl = $item['url'] ?? '#';
                                $mainPath = ltrim(parse_url($itemUrl, PHP_URL_PATH), '/');
                                $isMainActive = request()->fullUrlIs($itemUrl) || ($mainPath === '' ? request()->is('/') : request()->is($mainPath));
                            @endphp
                            <div class="menu-item me-0 me-lg-2">
                                <a class="menu-link {{ $isMainActive ? 'active' : '' }}" href="{{ $itemUrl }}">
                                    <span class="menu-title">{{ $item['title'] }}</span>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Menu wrapper-->


            <!--begin::Navbar-->
            <div class="app-navbar flex-shrink-0">
                {{ $slot }}
            </div>
            <!--end::Navbar-->
        </div>
        <!--end::Header wrapper-->
    </div>
    <!--end::Header container-->
</div>
