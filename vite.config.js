import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // 'resources/scss/app.scss',
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/app-ltr.css',
                'resources/css/app-rtl.css'
            ],
            refresh: true,
        }),
    ],
});
