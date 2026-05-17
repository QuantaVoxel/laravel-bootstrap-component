# Laravel Bootstrap Components

This package provides a comprehensive suite of highly configurable Blade components tailored for Bootstrap 5 (Metronic styling).

---

## 🎨 UI Elements

### Accordion
A collapsible component for toggling content visibility.

**Basic Usage:**
```blade
<x-bootstrap::accordion>
    <x-bootstrap::accordion-item title="Item 1" active>
        Content for item 1...
    </x-bootstrap::accordion-item>
    <x-bootstrap::accordion-item title="Item 2">
        Content for item 2...
    </x-bootstrap::accordion-item>
</x-bootstrap::accordion>
```

**With Icons:**
Enable icons using the `hasIcon` property on the wrapper.
```blade
<x-bootstrap::accordion hasIcon>
    <x-bootstrap::accordion-item title="Getting Started">...</x-bootstrap::accordion-item>
</x-bootstrap::accordion>
```

### Alert
Displays a notice or feedback message.

**Basic Usage:**
```blade
<x-bootstrap::alert title="Success" description="Operation completed successfully." color="success" />
```

**Styles & Dismissible:**
```blade
<x-bootstrap::alert 
    title="Warning" 
    description="Please check your inputs." 
    color="warning" 
    type="light" 
    dismissible 
/>

<x-bootstrap::alert title="Info" color="info" type="solid" borderType="dashed" />
```

### Avatar (Symbol)
Custom components for user profile pictures, labels, or brand icons.

**Basic Usage:**
```blade
<x-bootstrap::avatar image="assets/media/avatars/300-6.jpg" size="50px" />
<x-bootstrap::avatar bgImage="assets/media/avatars/300-12.jpg" size="50px" shape="circle" />
<x-bootstrap::avatar label="A" color="success" size="50px" />
```

**Badges & Groups:**
```blade
<x-bootstrap::avatar label="A" badge="3" badgeColor="danger" size="50px" />

<x-bootstrap::avatar-group hover>
    <x-bootstrap::avatar image="assets/media/avatars/300-1.jpg" shape="circle" />
    <x-bootstrap::avatar label="J" color="primary" shape="circle" />
</x-bootstrap::avatar-group>
```

### Badge
Small count and labeling components.

**Basic Usage:**
```blade
<x-bootstrap::badge color="primary" text="New" />
<x-bootstrap::badge color="danger" text="3" shape="circle" />
<x-bootstrap::badge color="success" text="Verified" light outline />
```

### Bullet
Small bullet indicators for lists or statuses.

**Basic Usage:**
```blade
<x-bootstrap::bullet color="primary" />
<x-bootstrap::bullet color="success" dot text="Online" />
```

### Button
Interactive button component with extensive customization.

**Basic Usage:**
```blade
<x-bootstrap::button color="primary">Submit</x-bootstrap::button>
<x-bootstrap::button color="danger" outline outlineType="dashed">Cancel</x-bootstrap::button>
```

**With Icons & Badges:**
```blade
<x-bootstrap::button color="success" icon="solar:check-circle-bold">Save</x-bootstrap::button>
<x-bootstrap::button color="info" withBadge badgeText="3" badgeColor="danger">Messages</x-bootstrap::button>
```

### Card
Flexible and extensible content container.

**Basic Usage:**
```blade
<x-bootstrap::card title="Basic Card">
    Lorem Ipsum is simply dummy text...
    <x-slot name="footer">Footer</x-slot>
</x-bootstrap::card>
```

**Advanced Features (Collapsible, Scrollable, Ribbons):**
```blade
<x-bootstrap::card title="Collapsible" collapsible :expanded="false">...</x-bootstrap::card>
<x-bootstrap::card title="Scrollable" scroll height="200px">...</x-bootstrap::card>

<!-- With Ribbon -->
<x-bootstrap::card title="New Feature" ribbon="New" ribbonColor="success" ribbonDirection="end">
    Card content...
</x-bootstrap::card>
```

### Icon
Wrapper for rendering SVG or font icons using Iconify.

**Basic Usage:**
```blade
<x-bootstrap::icon name="solar:home-smile-bold" class="text-primary fs-1" />
```

### Separator
Divides page blocks with space and visual lines.

**Basic Usage:**
```blade
<x-bootstrap::separator class="my-10" />
<x-bootstrap::separator size="2" color="primary" style="dashed" class="my-10" />

<!-- With Centered Content -->
<x-bootstrap::separator class="my-15">OR</x-bootstrap::separator>
```

---

## 📝 Form Components

### Checkbox & Radio
Highly customizable checks and radios.

**Basic Usage:**
```blade
<x-bootstrap::checkbox name="option1" value="1" label="Default Checkbox" />
<x-bootstrap::radio name="option2" value="1" label="Default Radio" />
<x-bootstrap::checkbox name="s1" value="1" label="Toggle me" switch solid />
```

### Input
Supports various styles, required field indicators, input groups, and floating labels.

**Basic Usage:**
```blade
<x-bootstrap::input name="email" type="email" placeholder="name@example.com" />
<x-bootstrap::input name="username" label="Username" required />
<x-bootstrap::input name="email" label="Email address" floating />
```

**Input Groups:**
```blade
<x-bootstrap::input name="username" prefix="@" placeholder="Username" />
<x-bootstrap::input name="profile" prefixIcon="solar:user-bold" placeholder="Profile" />
```

### Range
Slider input for numeric values.

**Basic Usage:**
```blade
<x-bootstrap::range name="volume" label="Volume" min="0" max="100" />
```

### Rating
Star-based rating component for display and form inputs.

**Basic Usage:**
```blade
<!-- Read Only -->
<x-bootstrap::rating :value="3" />

<!-- Custom Icon and Color -->
<x-bootstrap::rating :value="4" icon="solar:heart-bold" iconColor="danger" />

<!-- Edit Mode for Forms -->
<x-bootstrap::rating name="user_rating" :value="2" edit showReset />
```

### Select
Standard select dropdown.

**Basic Usage:**
```blade
<x-bootstrap::select name="category" label="Category" style="solid">
    <option value="1">One</option>
    <option value="2">Two</option>
</x-bootstrap::select>
```

---

## 🖥️ Layout & Dashboard

These components provide the structural skeleton for building a Metronic-styled dashboard.

### Dashboard Skeleton
The main layout wrapper that handles the HTML structure, head, and body tags.

```blade
<x-bootstrap::dashboard title="My Application">
    <!-- Main page content here -->
    
    <x-slot name="footer">
        <!-- Optional Footer -->
    </x-slot>
</x-bootstrap::dashboard>
```

### Theme Mode Toggle
A quick toggle for Light/Dark/System theme preferences.

```blade
<x-bootstrap::thememode/>
```
