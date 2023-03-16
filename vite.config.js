import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/lang-highlight.css',
                'resources/js/app.js',
                'resources/js/fullpage.min.js'
            ],
            refresh: true,
        }),
    ],
});
