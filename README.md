# Quantavoxel Laravel Bootstrap Component & Flexible Icon System

**Quantavoxel Bootstrap Component** is a standalone Laravel package engineered to drastically accelerate UI development using Bootstrap 5. It eliminates configuration overhead by combining ready-to-use, reusable Blade components, streamlined global asset management, and a highly scalable, universal icon engine—all out of the box.

### 🚀 Key Features & SEO Advantages:
* **Pre-compiled Assets & Zero Config:** All required CSS and JS bundles are baked directly into the package. Your main application is completely liberated from complex build tool configurations (Vite/Webpack).
* **Scalable Blade UI Components:** Rapidly build interface structures (navbars, sidebars, modals, alerts) utilizing standard, clean Laravel HTML syntax tags (`<x-bootstrap::... />`).
* **Universal Icon Integration Engine:** Powered by a flexible integration design. This package is completely future-proof—built to dynamically support thousands of icon sets (Solar Icons, Lucide, FontAwesome, Remix Icons, etc.) via a unified API, preventing vendor lock-in.
* **Developer-Centric Extensibility:** Easily customize, swap, or extend icon sets and global styles using a dedicated, publishable configuration file.

---

## 📦 Installation

You can install the package via composer:

```bash
composer require quantavoxel/laravel-bootstrap-component
```

After installation, publish the assets and configuration files using the following command:

```bash
php artisan vendor:publish --provider="Quantavoxel\LaravelBootstrapComponent\BootstrapComponentServiceProvider"
```

This will publish:
- Compiled CSS and JS assets to `public/vendor/quantavoxel/bootstrap-component`
- Configuration files to the `config/` directory.

---

## 🛠️ Usage & Layout Setup

The package provides a ready-to-use dashboard layout that automatically integrates the sidebar, header, and required assets.

### Basic Layout Setup

In your main Blade view (e.g., `resources/views/dashboard.blade.php`), simply wrap your content with the `<x-bootstrap::dashboard>` component:

```blade
<x-bootstrap::dashboard title="My Application Dashboard">
    <!-- Your main page content goes here -->
    <div class="row">
        <div class="col-12">
            <x-bootstrap::card title="Welcome">
                Hello, world!
            </x-bootstrap::card>
        </div>
    </div>
</x-bootstrap::dashboard>
```

This automatically sets up the HTML skeleton, Metronic theme styles, Iconify scripts, the Sidebar, and the Header.

For detailed documentation on all available components (Buttons, Inputs, Modals, Cards, Avatars, etc.), please refer to the **[Component Documentation](docs/component.md)**.

---

## ⚙️ Configuration (Sidebar & Header)

The package uses simple PHP configuration files to generate the dashboard navigation menus. You can find these files in your application's `config/` directory after publishing.

### Sidebar Configuration (`config/bootstrap-component-sidebar.php`)

Use the provided helper functions to easily build your sidebar structure:
- `add_heading('Title')`
- `add_single_menu('Title', 'icon-name', '/url')`
- `add_accordion_menu('Title', 'icon-name', [ ...sub menus ])`
- `add_sub_menu('Title', '/url')`

**Example:**
```php
<?php
return [
    add_heading('Dashboard'),
    add_single_menu('Overview', 'solar:buildings-3-bold', '/dashboard'),
    
    add_heading('Modules'),
    add_accordion_menu('Users', 'solar:users-group-rounded-bold', [
        add_sub_menu('All Users', '/users'),
        add_sub_menu('Roles', '/roles'),
    ])
];
```

### Header Configuration (`config/bootstrap-component-header.php`)

Similar to the sidebar, the header uses helper functions for navigation links:
- `add_header_single_menu('Title', '/url')`
- `add_header_dropdown_menu('Title', [ ...sub menus ])`
- `add_header_sub_menu('Title', '/url')`

**Example:**
```php
<?php
return [
    add_header_single_menu('Home', '/'),
    add_header_dropdown_menu('Resources', [
        add_header_sub_menu('Documentation', '/docs'),
        add_header_sub_menu('Support', '/support'),
    ]),
];
```

### General Configuration (`config/bootstrap-component.php`)

Configure global package settings, such as your application's logos and core routes:

```php
<?php
return [
    'logo-small' => 'https://placehold.co/27x20/FFFFFF/000?text=LG',
    'logo-small-dark' => 'https://placehold.co/27x20/FFFFFF/000?text=LG',
    'logo-large' => 'https://placehold.co/120x25/FFFFFF/000?text=LOGO+TEXT',
    'logo-large-dark' => 'https://placehold.co/120x25/FFFFFF/000?text=LOGO+TEXT',

    'routes' => [
        'dashboard' => '/dashboard'
    ]
];
```