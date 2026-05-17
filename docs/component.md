# Form Components

This package provides highly configurable form components for Bootstrap 5.

## Input

The input component supports various styles, required field indicator positioning, input groups, and floating labels.

### Basic Usage
```blade
<x-bootstrap::input name="email" type="email" placeholder="name@example.com" />
```

### Style Variants
Supported styles: `default`, `solid`, `transparent`, `flush`.

```blade
<x-bootstrap::input name="input1" style="solid" placeholder="Solid style" />
```

### Sizing
Supported sizes: `sm`, `lg`.

```blade
<x-bootstrap::input name="small_input" size="sm" placeholder="Small input" />
<x-bootstrap::input name="large_input" size="lg" placeholder="Large input" />
```

### Labels and Required Fields
You can position the required asterisk either in the label or floating over the input.

```blade
<!-- Asterisk in label (default) -->
<x-bootstrap::input name="username" label="Username" required />

<!-- Asterisk in input -->
<x-bootstrap::input name="password" label="Password" type="password" required symbol="input" />
```

### Floating Labels
Enable modern floating labels with the `floating` property. Note that `label` is required for this to work.

```blade
<x-bootstrap::input name="email" label="Email address" floating />
```

---

### Input Groups
Input groups allow you to prepend or append text and icons.

#### Text & Icon Addons
```blade
<!-- Text Prefix -->
<x-bootstrap::input name="username" prefix="@" placeholder="Username" />

<!-- Text Suffix -->
<x-bootstrap::input name="email" suffix="@example.com" placeholder="Recipient's username" />

<!-- Icon Prefix -->
<x-bootstrap::input name="profile" prefixIcon="solar:user-bold" placeholder="Profile" />
```

#### Sizing & Styles
Use `groupSize` for sizing and `groupSolid` for solid-style groups.

```blade
<x-bootstrap::input name="sm_input" prefix="Small" groupSize="sm" />
<x-bootstrap::input name="solid_input" prefix="@" groupSolid />
```

#### Custom HTML Addons (Slots)
Use the `prepend` and `append` slots for more complex HTML.

```blade
<x-bootstrap::input name="server" placeholder="Server">
    <x-slot name="append">
        <span class="input-group-text">@</span>
        <input type="text" class="form-control" placeholder="Domain" />
    </x-slot>
</x-bootstrap::input>
```

#### Combining with Floating Labels
Floating labels work seamlessly inside input groups.

```blade
<div class="input-group">
    <span class="input-group-text">@</span>
    <x-bootstrap::input name="username" label="Username" floating />
</div>
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

### Sizing
Supported sizes: `sm`, `lg`.

```blade
<x-bootstrap::select name="sm_select" size="sm" label="Small select">
    <option value="1">One</option>
</x-bootstrap::select>

<x-bootstrap::select name="lg_select" size="lg" label="Large select">
    <option value="1">One</option>
</x-bootstrap::select>
```

---

## Range

A simple range input component.

### Basic Usage
```blade
<x-bootstrap::range name="volume" label="Volume" min="0" max="100" />
```

---

## Checkbox & Radio

Highly customizable checks and radios with support for Metronic-style variants.

### Basic Usage
```blade
<x-bootstrap::checkbox name="option1" value="1" label="Default Checkbox" />
<x-bootstrap::radio name="option2" value="1" label="Default Radio" />
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

---

## Card

The card component is a flexible and extensible content container. It includes options for headers, footers, toolbars, and various style variants.

### Basic Usage
```blade
<x-bootstrap::card title="Basic Card">
    Lorem Ipsum is simply dummy text...
    <x-slot name="footer">Footer</x-slot>
</x-bootstrap::card>
```

### Style Variants
Supported styles: `bordered`, `dashed`, `flush`, `px0` (reset side paddings).

```blade
<x-bootstrap::card title="Bordered Card" bordered>
    ...
</x-bootstrap::card>

<x-bootstrap::card title="Flush Card" flush>
    ...
</x-bootstrap::card>
```

### Collapsible Card
Enable collapsible functionality with the `collapsible` property.

```blade
<x-bootstrap::card title="Collapsible Card" collapsible :expanded="false">
    This card is collapsed by default.
</x-bootstrap::card>
```

### Card Scroll
Use `scroll` and `height` to create a card with scrollable content.

```blade
<x-bootstrap::card title="Scrollable Card" scroll height="200px">
    Lots of content here...
</x-bootstrap::card>
```

### Toolbar & Slots
Add actions to the card header using the `toolbar` slot. You can also customize the entire body.

```blade
<x-bootstrap::card title="Card with Toolbar">
    <x-slot name="toolbar">
        <button type="button" class="btn btn-sm btn-light">Action</button>
    </x-slot>
    Lorem Ipsum is simply dummy text...
</x-bootstrap::card>

<!-- Using custom body slot -->
<x-bootstrap::card title="Custom Body Slot">
    <x-slot name="body">
        <div class="card-body p-0">
             <div class="card-p">Custom structure...</div>
        </div>
    </x-slot>
</x-bootstrap::card>
```

### Linkable Card
Use the `tag` property to change the root element to an `<a>` tag and `withoutBody` to handle custom internal padding/styles.

```blade
<x-bootstrap::card tag="a" href="#" class="hover-elevate-up parent-hover" withoutBody>
    <div class="card-body d-flex align-items">
        <span class="ms-3 text-gray-700 parent-hover-primary fs-6 fw-bold">
            Example link title
        </span>
    </div>
</x-bootstrap::card>
```

### Card Stretch
Use the `stretch` property to make cards the same height within a grid.
Modes: `stretch`, `stretch-75`, `stretch-50`, `stretch-33`, `stretch-25`.

```blade
<div class="row g-5">
    <div class="col-lg-4">
        <x-bootstrap::card title="Height 100%" stretch="stretch">
            ...
        </x-bootstrap::card>
    </div>
</div>
```
