# Form Components

This package provides highly configurable form components for Bootstrap 5.

## Input

The input component supports various styles and required field indicator positioning.

### Basic Usage
```blade
<x-bootstrap::input name="email" type="email" placeholder="name@example.com" />
```

### Style Variants
Supported styles: `default`, `solid`, `transparent`, `flush`.

```blade
<x-bootstrap::input name="input1" style="solid" placeholder="Solid style" />
<x-bootstrap::input name="input2" style="transparent" placeholder="Transparent style" />
<x-bootstrap::input name="input3" style="flush" placeholder="Flush style" />
```

### Labels and Required Fields
You can position the required asterisk either in the label or floating over the input.

```blade
<!-- Asterisk in label (default) -->
<x-bootstrap::input 
    name="username" 
    label="Username" 
    required 
    symbol="label" 
/>

<!-- Asterisk in input -->
<x-bootstrap::input 
    name="password" 
    label="Password" 
    type="password"
    required 
    symbol="input" 
/>
```

---

## Select

The select component supports the same style variants and uses a slot for its options.

### Basic Usage
```blade
<x-bootstrap::select name="category" label="Category" style="solid">
    <option value="1">One</option>
    <option value="2">Two</option>
</x-bootstrap::select>
```

### Style Variants
Supported styles: `default`, `solid`, `transparent`.

---

## Range

A simple range input component.

### Basic Usage
```blade
<x-bootstrap::range name="volume" label="Volume" min="0" max="100" />
```

### Disabled State
Pass any standard HTML attributes; they will be merged into the input.

```blade
<x-bootstrap::range name="disabled_range" label="Disabled Range" disabled />
```

---

## Checkbox & Radio

Highly customizable checks and radios with support for Metronic-style variants.

### Basic Usage
```blade
<x-bootstrap::checkbox name="option1" value="1" label="Default Checkbox" />
<x-bootstrap::radio name="option2" value="1" label="Default Radio" />
```

### Custom & Solid Styles
Use `custom` and `solid` for modern Metronic layouts.

```blade
<x-bootstrap::checkbox name="c1" value="1" label="Solid Checkbox" solid />
<x-bootstrap::radio name="r1" value="1" label="Solid Radio" solid />
```

### Colors
Supported colors: `success`, `danger`, `warning`.

```blade
<x-bootstrap::checkbox name="c2" value="1" label="Success" color="success" solid checked />
```

### Sizes
Supported sizes: `sm`, `lg`, or custom pixel values (`30`, `40`, `50`).

```blade
<x-bootstrap::checkbox name="c3" value="1" label="Large" size="lg" solid />
<x-bootstrap::checkbox name="c4" value="1" label="30px" size="30" solid />
```

### Switches (Checkbox only)
```blade
<x-bootstrap::checkbox name="s1" value="1" label="Toggle me" switch solid />
```

### Image Selection
Wrap components in a row with `data-kt-buttons="true"` for automatic state handling.

```blade
<div class="row" data-kt-buttons="true" data-kt-buttons-target=".form-check-image, .form-check-input">
    <div class="col-4">
        <x-bootstrap::radio 
            name="option" 
            value="1" 
            label="Option 1" 
            image="assets/media/stock/600x400/img-1.jpg" 
            solid 
            checked 
        />
    </div>
</div>
```
