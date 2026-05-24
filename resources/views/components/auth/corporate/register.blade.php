@aware([
    'headerTitle' => 'Sign Up',
    'headerSubtTitle' => 'Register new Account',
    'withoutForgot' => false
])
<x-bootstrap::auth.corporate.base>
    <!--begin::Form-->
    <form
            class="form w-100"
            novalidate="novalidate"
            id="kt_sign_in_form"
            action="{{ config('bootstrap-component.routes.register' , '/register') }}"
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

        <x-bootstrap::input name="name" type="text" placeholder="Input Name" label="Name"/>
        <x-bootstrap::input name="email" type="email" placeholder="Input Email" label="Email"/>
        <x-bootstrap::input name="password" type="password" placeholder="Input Password" label="Password"/>

        <!--begin::Submit button-->
        <div class="d-grid mb-10">
            <x-bootstrap::button color="primary" type="submit">
                Submit
            </x-bootstrap::button>
        </div>
        <!--end::Submit button-->

        <!--begin::Sign up-->
        <div class="text-gray-500 text-center fw-semibold fs-6">
            Already have an account?

            <a href="{{ config('bootstrap-component.routes.login', '/login') }}"
               class="link-primary">
                Sign in
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