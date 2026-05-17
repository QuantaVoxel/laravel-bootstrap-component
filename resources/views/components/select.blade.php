@if($label)
    <div class="mb-10">
        <label for="{{ $attributes->get('id') ?? $name }}" class="form-label {{ $required && $symbol === 'label' ? 'required' : '' }}">
            {{ $label }}
        </label>
@endif

@if($required && $symbol === 'input')
    <div class="position-relative">
        <div class="required position-absolute top-0"></div>
@endif

<select
    name="{{ $name }}"
    id="{{ $attributes->get('id') ?? $name }}"
    {{ $attributes->merge()->class($selectClasses) }}
>
    {{ $slot }}
</select>

@if($required && $symbol === 'input')
    </div>
@endif

@if($label)
    </div>
@endif
