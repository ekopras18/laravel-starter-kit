import {defineConfig, loadEnv} from 'vite';
import laravel from 'laravel-vite-plugin';

export default ({mode}) => {

    process.env = {...process.env, ...loadEnv(mode, process.cwd())};

    return defineConfig({
        server: {
            host: '0.0.0.0',
            hmr: {
                host: process.env.VITE_APP_HOST.split('//')[1],
                clientPort: 5173,
                protocol: 'ws',
            },
            port: 5173,
            // watch: {
            //     usePolling: true,
            // },
        },
        plugins: [
            laravel({
                input: [
                    'resources/css/assets.css',
                    'resources/js/assets.js',
                    'resources/js/example/example.js',
                ],
                refresh: true,
            }),
        ],
    });

}
