@php
    $isGroup = $hasGroup($__laravel_slots);
    $groupClasses = [
        'input-group',
        'input-group-solid' => $groupSolid,
        "input-group-{$groupSize}" => $groupSize,
    ];

    $labelClass = "form-label " . ($required && $symbol === 'label' ? 'required' : '');
    $id = $attributes->get('id') ?? $name;
@endphp

{{-- Standard Label (Top) --}}
@if($label && !$floating)
    <div class="mb-2">
        <label for="{{ $id }}" class="{{ $labelClass }}">
            {{ $label }}
        </label>
        @endif

        @if($required && $symbol === 'input' && !$floating)
            <div class="position-relative">
                <div class="required position-absolute top-0"></div>
                @endif

                @if($isGroup)
                    <div class="{{ collect($groupClasses)->filter()->join(' ') }}">
                        @endif

                        {{-- Prepend --}}
                        @if(isset($prepend))
                            {{ $prepend }}
                        @endif

                        @if($prefixIcon)
                            <span class="input-group-text">
            <x-bootstrap::icon :name="$prefixIcon"/>
        </span>
                        @endif

                        @if($prefix)
                            <span class="input-group-text">{{ $prefix }}</span>
                        @endif

                        @if($floating)
                            <div class="form-floating flex-grow-1">
                                @endif

                                <input
                                        type="{{ $type }}"
                                        name="{{ $name }}"
                                        id="{{ $id }}"
                                        {{ $attributes->merge(['placeholder' => $label])->class($inputClasses) }}
                                />

                                @if($floating)
                                    <label for="{{ $id }}" class="{{ $labelClass }}">{{ $label }}</label>
                            </div>
                        @endif

                        {{-- Append --}}
                        @if($suffix)
                            <span class="input-group-text">{{ $suffix }}</span>
                        @endif

                        @if($suffixIcon)
                            <span class="input-group-text">
            <x-bootstrap::icon :name="$suffixIcon"/>
        </span>
                        @endif

                        @if(isset($append))
                            {{ $append }}
                        @endif

                        @if($isGroup)
                    </div>
                @endif

                @if($required && $symbol === 'input' && !$floating)
            </div>
        @endif

        @if($label && !$floating)
            @error($name)
            <small class="text-danger ms-1 ">{{ $message }}</small>
        @else
            <small class="text-muted ms-1 ">{{ $help }}</small>
            @enderror
    </div>
@else
    @error($name)
    <small class="text-danger ms-1 ">{{ $message }}</small>
    @else
        <small class="text-muted ms-1 ">{{ $help }}</small>
        @enderror
    @endif
