import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    // Alias percorsi.
    resolve: {
        alias: {
            '~resources': '/resources/', // Alias per /resources/.
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap') // Alias Bootstrap.
        }
    },
});