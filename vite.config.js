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
                'resources/assets/admin/dist/js/demo.js',
                'resources/css/bootstrap.min.css',
                'resources/css/meanmenu.css',
                'resources/css/magnific-popup.min.css',
                'resources/assets/style.cs',
                'resources/css/responsive.css',
                'resources/css/aos.min.css',
                'resources/css/slick.css',
                'resources/css/aos.min.css',
                'resources/css/responsive.css',
                'resources/js/vendor/jquery-2.2.4.min.js',
                'resources/js/popper.min.js',
                'resources/js/bootstrap.min.js',
                'resources/js/magnific-popup.min.js',
                'resources/js/waypoints.min.js',
                'resources/js/counterup.min.js',
                'resources/js/meanmenu.min.js',
                'resources/js/aos.min.js',
                'resources/js/isotope.min.js',
                'resources/js/jquery.backgroundMove.js',
                'resources/js/slick.min.js',
                'resources/js/scrollUp.js',
                'resources/js/main.js',



            ],
            refresh: true,
        }),
    ],
});
