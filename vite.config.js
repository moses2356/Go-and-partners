import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        host: '0.0.0.0', // Listen on all network interfaces
        cors: true,
        strictPort: true, // Fail if port is in use rather than trying another
        hmr: {
            host: '192.168.1.7', // Lock HMR to the user's explicit local network IP address
        },
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
