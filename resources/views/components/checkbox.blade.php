@php
    $id = $attributes->get('id') ?? ($name . '_' . $value);
@endphp

@if($image)
    <label class="form-check-image {{ $attributes->get('checked') ? 'active' : '' }}">
        <div class="form-check-wrapper">
            <img src="{{ $image }}"/>
        </div>
@endif

<div {{ $attributes->only('class')->merge()->class($wrapperClasses) }}>
    <input
        type="checkbox"
        name="{{ $name }}"
        value="{{ $value }}"
        id="{{ $id }}"
        {{ $attributes->except('class')->merge()->class($inputClasses) }}
    />
    @if($label)
        <label class="form-check-label" for="{{ $id }}">
            {{ $label }}
        </label>
    @endif
</div>

@if($image)
    </label>
@endif
