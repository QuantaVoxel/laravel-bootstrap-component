// vite.config.js (di dalam folder package)
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/icon.js',
            ],
            publicDirectory: 'public',

        }),
    ],
    build: {
        rollupOptions: {
            output: {
                entryFileNames: 'assets/[name].js',
                chunkFileNames: 'assets/[name].js',
                assetFileNames: 'assets/[name].[ext]'
            }
        },
        chunkSizeWarningLimit: 50000,
    }
});
