import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/sass/app.scss", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    css: {
        preprocessorOptions: {
            scss: {
                // Ini akan membisukan peringatan deprecation
                quietDeps: true,
                // Jika masih muncul, tambahkan ini (untuk versi Sass terbaru)
                silenceDeprecations: [
                    "import",
                    "global-builtin",
                    "color-functions",
                    "if-function",
                ],
            },
        },
    },
});
