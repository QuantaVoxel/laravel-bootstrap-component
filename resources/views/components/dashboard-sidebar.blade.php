<div id="kt_app_sidebar" class="app-sidebar  flex-column "
     data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
     data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
     data-kt-drawer-width="225px" data-kt-drawer-direction="start"
     data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle"
>


    <!--begin::Logo-->
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <!--begin::Logo image-->
        <a href="{{ config('bootstrap-component.routes.dashboard') }}">
            <img alt="Logo" src="{{ config('bootstrap-component.logo-large') }}"
                 class="h-25px app-sidebar-logo-default"/>
            <img alt="Logo" src="{{ config('bootstrap-component.logo-small') }}"
                 class="h-20px app-sidebar-logo-minimize"/>
        </a>
        <!--end::Logo image-->

        <div
            id="kt_app_sidebar_toggle"
            class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate "
            data-kt-toggle="true"
            data-kt-toggle-state="active"
            data-kt-toggle-target="body"
            data-kt-toggle-name="app-sidebar-minimize"
        >

            <i class="ki-duotone ki-black-left-line fs-3 rotate-180">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </div>
        <!--end::Sidebar toggle-->
    </div>
    <!--end::Logo-->
    <!--begin::sidebar menu-->
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <div id="kt_app_sidebar" class="app-sidebar flex-column"
             data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
             data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
             data-kt-drawer-width="225px" data-kt-drawer-direction="start"
             data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle"
        >
            <!--begin::Logo-->
            <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
                <!--begin::Logo image-->
                <a href="{{ config('bootstrap-component.routes.dashboard', '#') }}">
                    <img alt="Logo" src="{{ config('bootstrap-component.logo-large') }}"
                         class="h-25px app-sidebar-logo-default"/>
                    <img alt="Logo" src="{{ config('bootstrap-component.logo-small') }}"
                         class="h-20px app-sidebar-logo-minimize"/>
                </a>
                <!--end::Logo image-->

                <div
                    id="kt_app_sidebar_toggle"
                    class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate "
                    data-kt-toggle="true"
                    data-kt-toggle-state="active"
                    data-kt-toggle-target="body"
                    data-kt-toggle-name="app-sidebar-minimize"
                >
                    <i class="ki-duotone ki-black-left-line fs-3 rotate-180">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Sidebar toggle-->
            </div>
            <!--end::Logo-->

            <!--begin::sidebar menu-->
            <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
                <!--begin::Menu wrapper-->
                <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
                    <!--begin::Scroll wrapper-->
                    <div
                        id="kt_app_sidebar_menu_scroll"
                        class="scroll-y my-5 mx-3"
                        data-kt-scroll="true"
                        data-kt-scroll-activate="true"
                        data-kt-scroll-height="auto"
                        data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                        data-kt-scroll-wrappers="#kt_app_sidebar_menu"
                        data-kt-scroll-offset="5px"
                        data-kt-scroll-save-state="true"
                    >
                        <!--begin::Menu-->
                        <div
                            class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6"
                            id="#kt_app_sidebar_menu"
                            data-kt-menu="true"
                            data-kt-menu-expand="false"
                        >
                            @foreach($menu as $item)
                                {{-- 1. HEADING TYPE --}}
                                @if(($item['type'] ?? '') === 'heading')
                                    <div class="menu-item pt-5">
                                        <div class="menu-content">
                                            <span class="menu-heading fw-bold text-uppercase fs-7">{{ $item['title'] }}</span>
                                        </div>
                                    </div>

                                    {{-- 2. ACCORDION / SUB MENU TYPE --}}
                                @elseif(isset($item['sub']) && !empty($item['sub']))
                                    @php
                                        // Cek apakah salah satu sub-item sedang aktif saat ini
                                        $isSubActive = collect($item['sub'])->contains(function($subItem) {
                                            $path = ltrim(parse_url($subItem['url'], PHP_URL_PATH), '/');
                                            return request()->fullUrlIs($subItem['url']) || ($path === '' ? request()->is('/') : request()->is($path));
                                        });
                                    @endphp

                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ $isSubActive ? 'here show' : '' }}">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <x-bootstrap::icon :name="$item['icon']" class="fs-2" />
                                    </span>
                                    <span class="menu-title">{{ $item['title'] }}</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                        <div class="menu-sub menu-sub-accordion">
                                            @foreach($item['sub'] as $subItem)
                                                @php
                                                    $subPath = ltrim(parse_url($subItem['url'], PHP_URL_PATH), '/');
                                                    $isCurrentSub = request()->fullUrlIs($subItem['url']) || ($subPath === '' ? request()->is('/') : request()->is($subPath));
                                                @endphp
                                                <div class="menu-item">
                                                    <a class="menu-link {{ $isCurrentSub ? 'active' : '' }}" href="{{ $subItem['url'] }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                        <span class="menu-title">{{ $subItem['title'] }}</span>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    {{-- 3. SINGLE MENU TYPE --}}
                                @else
                                    @php
                                        $itemUrl = $item['url'] ?? '#';
                                        $mainPath = ltrim(parse_url($itemUrl, PHP_URL_PATH), '/');
                                        $isMainActive = request()->fullUrlIs($itemUrl) || ($mainPath === '' ? request()->is('/') : request()->is($mainPath));
                                    @endphp
                                    <div class="menu-item">
                                        <a class="menu-link {{ $isMainActive ? 'active' : '' }}" href="{{ $itemUrl }}">
                                    <span class="menu-icon">
                                        <x-bootstrap::icon :name="$item['icon']" class="fs-2" />
                                    </span>
                                            <span class="menu-title">{{ $item['title'] }}</span>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Scroll wrapper-->
                </div>
            </div>
        </div>
    </div>

</div>
