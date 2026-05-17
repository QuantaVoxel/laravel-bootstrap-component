# Laravel Bootstrap Component

This project is a Laravel package that provides a set of reusable Bootstrap-themed Blade components. It is designed to be easily integrated into Laravel applications, offering consistent styling and functionality.

## Project Overview

- **Name:** `quantavoxel/laravel-bootstrap-component`
- **Type:** Laravel Library / Package
- **PHP Version:** `^8.4`
- **Laravel Version:** `^13.9`
- **Main Technologies:**
    - **PHP/Laravel:** Core framework and component logic.
    - **Vite:** Asset bundling for Iconify.
    - **Iconify:** Universal icon integration system.
    - **Bootstrap 5:** Underlying UI framework (via pre-bundled assets).

### Architecture

The package follows the standard Laravel package structure:
- `src/`: Contains the PHP source code, including the Service Provider, Component classes, and Enums.
- `resources/`: Contains the Blade views and asset sources (Iconify JS).
- `public/`: Contains pre-bundled theme assets (`public/assets`) and Vite-built assets (`public/build`).
- `config/`: Contains configuration files for components and menu structures.
- `vite.config.js`: Configuration for Iconify asset bundling.

## Components

### Base Components
- `bootstrap::accordion`: Main accordion container.
- `bootstrap::accordion-item`: Individual accordion items.
- `bootstrap::alert`: Dismissible or static alerts.
- `bootstrap::badge`: Status badges and labels.
- `bootstrap::button`: Flexible buttons with hover effects.
- `bootstrap::icon`: Iconify integration.
- `bootstrap::bullet`: List or status bullets (Anonymous).
- `bootstrap::thememode`: Theme switcher (Anonymous).

### Dashboard Components
- `bootstrap::dashboard`: Main layout wrapper.
- `bootstrap::dashboard-header`: Configurable top navigation.
- `bootstrap::dashboard-sidebar`: Configurable side navigation.
- `bootstrap::dashboard-header-profile`: Profile dropdown (Anonymous).

## Building and Running

### Development Setup

1.  **Install PHP Dependencies:**
    ```bash
    composer install
    ```

2.  **Install Node Dependencies:**
    ```bash
    npm install
    ```

### Asset Management

The package uses Vite to manage and build Iconify assets.

- **Build Assets for Production:**
    ```bash
    npm run build
    ```
  This command bundles the Iconify JS into the `public/build/assets` directory.

### Integration in Laravel

Once installed in a Laravel application, the package registers itself automatically.

- **Blade Directives:**
    - `@qvComponentStyles`: Injects the pre-bundled theme CSS.
    - `@qvComponentScripts`: Injects Iconify, pre-bundled JS, and Vite-built scripts.

- **Publishing Assets and Config:**
    - **Assets:** `php artisan vendor:publish --tag=qv-component-assets`
    - **Config:** `php artisan vendor:publish --tag=qv-component-config`

- **Using Components:**
  Components can be used via the `bootstrap` namespace:
  ```blade
  <x-bootstrap::alert type="success" message="Operation successful!" />
  ```

## Development Conventions

### Namespacing and Structure

- **PHP Namespace:** `Quantavoxel\LaravelBootstrapComponent`
- **Blade Component Namespace:** `bootstrap`
- **Component Classes:** Located in `src/View/Components/`.
- **Blade Views:** Located in `resources/views/components/`.
- **Enums:** Located in `src/Enums/` (e.g., `Color`, `ButtonHoverEffect`).

### Configuration

The package is highly configurable via PHP files in the `config/` directory:
- `bootstrap-component.php`: General settings (logos, routes).
- `bootstrap-component-sidebar.php`: Defines the sidebar menu structure.
- `bootstrap-component-header.php`: Defines the header menu structure.

Menu configurations use helper functions (`add_heading`, `add_single_menu`, `add_accordion_menu`, etc.) to build the structure.

### Asset Conventions

- **Pre-bundled Assets:** Located in `public/assets/` (e.g., `style.bundle.css`, `scripts.bundle.js`).
- **Source Assets:** Iconify setup is in `resources/js/icon.js`.
- **Built Assets:** Served from `public/build/assets`.
