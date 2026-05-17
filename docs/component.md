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

### Ribbons
Add attractive ribbons to your cards with various styles and positions.

#### Basic Ribbon
```blade
<x-bootstrap::card title="Basic Ribbon" ribbon="Ribbon" ribbonColor="primary">
    ...
</x-bootstrap::card>
```

#### Rounded Corners
Use `ribbonDirection` to set the edge position (`start`, `end`, `top`, `bottom`).

```blade
<x-bootstrap::card title="Rounded Ribbon" ribbon="Ribbon" ribbonDirection="end">
    ...
</x-bootstrap::card>
```

#### Vertical Ribbon
Pair `ribbonVertical` with `ribbonDirection="top"`.

```blade
<x-bootstrap::card title="Vertical Ribbon" ribbon="OK!" ribbonDirection="top" ribbonVertical ribbonColor="danger">
    ...
</x-bootstrap::card>
```

#### Clip Ribbon
Enable the clip style with the `ribbonClip` property.

```blade
<x-bootstrap::card title="Clip Ribbon" ribbon="Ribbon" ribbonDirection="end" ribbonClip ribbonColor="info">
    ...
</x-bootstrap::card>
```

#### Triangle Ribbon
Triangle ribbons are positioned at the corners. Use `ribbonTriangle` with directions like `top-start`, `top-end`, `bottom-start`, or `bottom-end`.

```blade
<x-bootstrap::card title="Triangle Ribbon" ribbonTriangle="top-start" ribbonColor="primary">
    <x-slot name="ribbon">
        <i class="bi bi-check2 fs-2 text-white"></i>
    </x-slot>
    ...
</x-bootstrap::card>
```

---

## Avatar (Symbol)

Avatars (Symbols) are custom components for user profile pictures, labels, or brand icons.

### Basic Usage
Render an avatar using an image URL.

```blade
<x-bootstrap::avatar image="assets/media/avatars/300-6.jpg" size="50px" />
```

### Background Image
Place the avatar as a background image for better centering and scaling.

```blade
<x-bootstrap::avatar bgImage="assets/media/avatars/300-12.jpg" size="50px" />
```

### Text Labels
Use initials or labels with background and text colors.

```blade
<x-bootstrap::avatar label="A" color="success" size="50px" />
<x-bootstrap::avatar label="L" color="danger" size="50px" />
```

### Shapes & Ratios
Change the shape to `circle` or `square`, and set the ratio (e.g., `2by3`).

```blade
<x-bootstrap::avatar bgImage="..." shape="circle" size="50px" />
<x-bootstrap::avatar image="..." ratio="2by3" size="50px" />
```

### Badges
Add status or notification badges to avatars.

```blade
<!-- With numeric badge -->
<x-bootstrap::avatar label="A" badge="3" badgeColor="danger" size="50px" />

<!-- Status indicator (dot only) -->
<x-bootstrap::avatar image="..." :badge="true" badgeColor="success" badgePosition="top-100 start-100" />
```

### Sizing
Support for various sizes from `20px` up to `200px`.

```blade
<x-bootstrap::avatar label="S" size="30px" />
<x-bootstrap::avatar label="M" size="75px" />
<x-bootstrap::avatar label="L" size="150px" />
```

### Avatar Group
Group multiple avatars with a slight overlap and optional hover effect.

```blade
<x-bootstrap::avatar-group hover>
    <x-bootstrap::avatar image="assets/media/avatars/300-1.jpg" shape="circle" />
    <x-bootstrap::avatar label="J" color="primary" shape="circle" />
    <x-bootstrap::avatar image="assets/media/avatars/300-2.jpg" shape="circle" />
</x-bootstrap::avatar-group>
```

---

## Separator

Separator is a custom component used to divide page blocks with space and visual lines. It supports sizes, colors, styles, and centered content.

### Basic Usage
```blade
<x-bootstrap::separator class="my-10" />
```

### Sizes
Use the `size` property (2, 3, 4, 5) to change the border width.

```blade
<x-bootstrap::separator size="2" class="my-10" />
<x-bootstrap::separator size="3" class="my-10" />
```

### Colors
Use the `color` property to change the border color.

```blade
<x-bootstrap::separator color="primary" class="my-10" />
<x-bootstrap::separator color="danger" class="my-10" />
```

### Styles
Use the `style` property (`dashed`, `dotted`) to change the border style.

```blade
<x-bootstrap::separator style="dashed" color="primary" class="my-10" />
<x-bootstrap::separator style="dotted" color="success" class="my-10" />
```

### Centered Content
Simply add content inside the component to automatically create a centered content separator.

```blade
<x-bootstrap::separator class="my-15">Separator</x-bootstrap::separator>

<x-bootstrap::separator style="dotted" color="dark" class="my-15">
    <span class="h1">Title</span>
</x-bootstrap::separator>

<x-bootstrap::separator style="dashed" color="primary" class="my-15">
    <i class="ki-duotone ki-abstract-19 fs-1 text-primary">
        <span class="path1"></span><span class="path2"></span>
    </i>
</x-bootstrap::separator>
```
