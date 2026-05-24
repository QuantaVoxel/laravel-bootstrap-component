@aware([
    'headerTitle' => 'Sign In',
    'headerSubtTitle' => 'Sign in to your account',
    'withoutForgot' => false
])
<x-bootstrap::auth.corporate.base>
    <!--begin::Form-->
    <form
            class="form w-100"
            novalidate="novalidate"
            id="kt_sign_in_form"
            action="{{ config('bootstrap-component.routes.login', '/register') }}"
            method="post"
    >
        <!--begin::Heading-->
        <div class="text-center mb-11">
            <!--begin::Title-->
            <h1 class="text-gray-900 fw-bolder mb-3">
                {{ $headerTitle }}
            </h1>
            <!--end::Title-->

            <!--begin::Subtitle-->
            <div class="text-gray-500 fw-semibold fs-6">
                {{ $headerSubtTitle }}
            </div>
            <!--end::Subtitle--->
        </div>
        <!--begin::Heading-->

        @isset($loginOption)
            {{ $loginOption }}
        @endisset

        <x-bootstrap::input name="email" type="email" placeholder="Input Email" label="Email"/>
        <x-bootstrap::input name="password" type="password" placeholder="Input Password" label="Password"/>


        <!--begin::Wrapper-->
        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
            <div></div>
            @if(!$withoutForgot)
                <!--begin::Link-->
                <a href="{{ config('bootstrap-component.routes.forgot-password', '/forgot-password') }}"
                   class="link-primary">
                    Forgot Password ?
                </a>
                <!--end::Link-->
            @endif
        </div>
        <!--end::Wrapper-->

        <!--begin::Submit button-->
        <div class="d-grid mb-10">
            <x-bootstrap::button color="primary" type="submit">
                Submit
            </x-bootstrap::button>
        </div>
        <!--end::Submit button-->

        <!--begin::Sign up-->
        <div class="text-gray-500 text-center fw-semibold fs-6">
            Not a Member yet?

            <a href="{{ config('bootstrap-component.routes.register', '/register') }}"
               class="link-primary">
                Sign up
            </a>
        </div>
        <!--end::Sign up-->
    </form>
    <!--end::Form-->

    @isset($footer)
        <x-slot:footer>
            {{ $footer }}
        </x-slot:footer>
    @endisset

</x-bootstrap::auth.corporate.base>