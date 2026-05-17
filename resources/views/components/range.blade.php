@if($label)
    <div class="mb-10">
        <label for="{{ $attributes->get('id') ?? $name }}" class="form-label">
            {{ $label }}
        </label>
@endif

<input
    type="range"
    name="{{ $name }}"
    id="{{ $attributes->get('id') ?? $name }}"
    {{ $attributes->merge(['class' => 'form-range']) }}
/>

@if($label)
    </div>
@endif
