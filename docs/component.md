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
