<x-bootstrap::base-auth :title="$pageTitle">
    <x-dynamic-component :component="'bootstrap::auth.' . $layout . '.'.$mode" {{ $attributes->merge() }} />
</x-bootstrap::base-auth>