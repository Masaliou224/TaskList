import viteReact from "@vitejs/plugin-react";
import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";
import 'dotenv/config';


export default defineConfig({
    build: {
        minify: process.env.APP_ENV === 'production' ? 'esbuild' : false,
        cssMinify: process.env.APP_ENV === 'production',
    },
    plugins: [
        laravel({
            input: ['resources/views/react/app.tsx'],
            refresh: true,
        }),
        viteReact(),
    ],
});
// import { defineConfig } from 'vite';
// import laravel from 'laravel-vite-plugin';
// import React from '@vitejs/plugin-react';
// import 'dotenv/config';

// export default defineConfig({ 
//     build: {
//         minify: process.env.APP_ENV === 'production' ? 'esbuild' : false,
//         cssMinify: process.env.APP_ENV === 'production',
//     },
//     plugins: [
//         laravel({
//             input: ['ressources/react/app.tsx'],
//             refresh: true,
//         }),
//         react(),
//     ],
// });
