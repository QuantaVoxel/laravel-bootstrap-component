# Laravel Bootstrap Component

This project is a Laravel package that provides a set of reusable Bootstrap-themed Blade components. It is designed to be easily integrated into Laravel applications, offering consistent styling and functionality.

## Project Overview

- **Name:** `quantavoxel/laravel-bootstrap-component`
- **Type:** Laravel Library / Package
- **PHP Version:** ^8.4
- **Laravel Version:** ^13.9
- **Main Technologies:**
    - **PHP/Laravel:** Core framework and component logic.
    - **Vite:** Asset bundling (CSS/JS).
    - **Iconify:** Icon system used within components.
    - **Bootstrap:** Underlying CSS framework (assumed based on component names and structure).

### Architecture

The package follows the standard Laravel package structure:
- `src/`: Contains the PHP source code, including the Service Provider and Component classes.
- `resources/`: Contains the Blade views, CSS, and JS assets.
- `public/`: Contains the built assets (generated via Vite).
- `vite.config.js`: Configuration for asset bundling.

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

The package uses Vite to manage and build assets.

- **Build Assets for Production:**
    ```bash
    npm run build
    ```
  This command will bundle the CSS and JS files into the `public/build` directory.

### Integration in Laravel

Once installed in a Laravel application, the package registers itself automatically.

- **Blade Directives:**
    - `@bootstrapComponentStyle`: Injects the CSS link for the package.
    - `@bootstrapComponentScript`: Injects the JS script for Iconify/components.

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

### Coding Standards

- The project uses PHP 8.4 features (e.g., `final` classes, type hinting).
- Blade templates should follow Bootstrap conventions for layout and classes.

### Asset Conventions

- Styles are located in `resources/css/style.css`.
- JavaScript (Iconify setup) is in `resources/js/icon.js`.
- Built assets are served from `public/build/assets`.
