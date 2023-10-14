import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/assets/admin/plugins/fontawesome-free/css/all.min.css',
                'resources/assets/admin/dist/css/adminlte.min.css',
                'resources/assets/admin/plugins/jquery/jquery.min.js',
                'resources/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js',
                'resources/assets/admin/dist/js/adminlte.min.js',
                'resources/assets/admin/dist/js/demo.js'
            ],
            refresh: true,
        }),
    ],
});
