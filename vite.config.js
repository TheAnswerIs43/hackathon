import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        host: '0.0.0.0', // 👈 required
        hmr: {
            host: 'localhost',
            //port: 5173, // 👈 required
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/onboarding.js',
                'resources/js/profile.js',
            ],
            refresh: true,
        }),
    ],
});
