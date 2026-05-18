# Laravel Bootstrap Components

This package provides a comprehensive suite of highly configurable Blade components tailored for Bootstrap 5 and the Metronic design system.

---

## 🎨 UI Elements

### Accordion
A collapsible component for toggling content visibility.

**Basic Usage:**
```blade
<x-bootstrap::accordion>
    <x-bootstrap::accordion-item title="What is Laravel?" active>
        Laravel is a web application framework...
    </x-bootstrap::accordion-item>
    <x-bootstrap::accordion-item title="Is it free?">
        Yes, Laravel is open-source...
    </x-bootstrap::accordion-item>
</x-bootstrap::accordion>
```

**Customization:**
- `hasIcon`: Enable toggle icons.
- `openIcon` / `closeIcon`: Customize icons (defaults to plus/minus).
- `animated`: Enable toggle animation (default: `true`).

---

### Alert
Displays prominent notices or feedback messages.

**Basic Usage:**
```blade
<x-bootstrap::alert title="Success" description="Profile updated!" color="success" />
```

**Variants:**
- `type`: `alert`, `solid`, `light`.
- `borderType`: `solid`, `dashed`, `dotted`.
- `dismissible`: Adds a close button.
- `icon`: Customize the alert icon.

---

### Avatar (Symbol)
Used for user profile pictures, labels, or brand icons.

**Basic Usage:**
```blade
<!-- Image -->
<x-bootstrap::avatar image="path/to/img.jpg" size="50px" />

<!-- Background Image (Better scaling) -->
<x-bootstrap::avatar bgImage="path/to/img.jpg" shape="circle" />

<!-- Text Label -->
<x-bootstrap::avatar label="JD" color="primary" />
```

**Groups & Badges:**
- `badge`: String or `true` (for a dot).
- `badgeColor`: Background color of the badge.
- `badgePosition`: CSS positioning classes.
- `<x-bootstrap::avatar-group>`: Wrapper for overlapping avatars.

---

### Badge
Small count and labeling components.

**Basic Usage:**
```blade
<x-bootstrap::badge color="primary" text="New" />
<x-bootstrap::badge color="danger" text="3" shape="circle" />
<x-bootstrap::badge color="success" text="Verified" light outline />
```

---

### Bullet
Small indicators for lists, statuses, or navigation.

**Basic Usage:**
```blade
<x-bootstrap::bullet color="primary" />
<x-bootstrap::bullet color="success" dot text="Online" />
<x-bootstrap::bullet color="info" line h="10px" w="2px" />
```

---

### Button
Interactive button component with extensive styling options.

**Basic Usage:**
```blade
<x-bootstrap::button color="primary">Click Me</x-bootstrap::button>
<x-bootstrap::button color="danger" outline outlineType="dashed">Delete</x-bootstrap::button>
```

**Features:**
- `hoverEffect`: `hover-elevate-up`, `hover-scale`, etc.
- `icon`: Prepend an iconify icon.
- `iconOnly`: Square button for icons.
- `withBadge`: Adds a notification badge to the button.

---

### Card
Flexible content container for blocks of information.

**Basic Usage:**
```blade
<x-bootstrap::card title="Project Statistics">
    Card content goes here...
    <x-slot name="footer">Last updated 5m ago</x-slot>
</x-bootstrap::card>
```

**Advanced Features:**
- `collapsible`: Enable fold/unfold functionality.
- `scroll`: Enable internal scrolling with a fixed `height`.
- `ribbon`: Add decorative ribbons (Basic, Vertical, Triangle).
- `tag`: Change root element (e.g., `tag="a"` for linkable cards).
- `withoutBody`: Omit the `.card-body` wrapper for custom structures.

---

### Icon
Universal wrapper for Iconify icons.

**Basic Usage:**
```blade
<x-bootstrap::icon name="solar:settings-bold" class="text-gray-500 fs-1" />
```

---

### Separator
Divides content with a clean visual line and optional centered text.

**Basic Usage:**
```blade
<x-bootstrap::separator class="my-10" />
<x-bootstrap::separator size="3" color="primary" style="dashed" />

<!-- Centered Content -->
<x-bootstrap::separator class="my-15">OR CONTINUE WITH</x-bootstrap::separator>
```

---

### Table
Responsive and highly stylable table component.

**Basic Usage:**
```blade
<x-bootstrap::table>
    <thead>
        <tr class="fw-bold fs-6 text-gray-800">
            <th>Product</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>MacBook Pro</td>
            <td>$2,499</td>
        </tr>
    </tbody>
</x-bootstrap::table>
```

**Styling Options:**
- `bordered`: Add borders to all sides.
- `rowBordered` / `rowDashed`: Add borders between rows.
- `striped` / `hover`: Standard Bootstrap row effects.
- `gy`, `gs`, `gx`: Metronic-specific cell padding/spacing.

---

## 📝 Form Components

### Input
Highly configurable text, email, and password fields.

**Basic Usage:**
```blade
<x-bootstrap::input name="email" label="Email Address" required floating />
<x-bootstrap::input name="search" placeholder="Search..." prefixIcon="solar:magnifer-linear" />
```

---

### Select
Standard and solid-style dropdowns.

```blade
<x-bootstrap::select name="role" label="Select Role" style="solid">
    <option value="admin">Admin</option>
    <option value="user">User</option>
</x-bootstrap::select>
```

---

### Checkbox & Radio
Custom-styled checks and switches.

```blade
<x-bootstrap::checkbox name="remember" label="Remember Me" solid />
<x-bootstrap::checkbox name="notify" label="Enable Alerts" switch color="success" />

<!-- With Image Select -->
<x-bootstrap::radio name="theme" value="dark" image="path/to/dark-thumb.jpg" />
```

---

### Rating
Interactive or read-only star rating.

```blade
<x-bootstrap::rating :value="4" iconColor="warning" />
<x-bootstrap::rating name="feedback" :value="0" edit showReset />
```

---

### Range
Simple range slider input.

```blade
<x-bootstrap::range name="volume" min="0" max="100" label="Volume Control" />
```

---

## 🖥️ Layout & Dashboard

### Dashboard
The root layout component that provides the full Metronic HTML skeleton.

```blade
<x-bootstrap::dashboard title="Admin Portal">
    <div class="row">
        <!-- Page Content -->
    </div>
</x-bootstrap::dashboard>
```

### Theme Mode
Theme switcher for toggling between Light, Dark, and System modes.

```blade
<x-bootstrap::thememode />
```
