import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import unocss from "unocss/vite";

export default defineConfig({
    plugins: [
        unocss({
            content: {
                filesystem: ["resources/**/*.{css,js,blade.php}"],
            },
        }),
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    server: {
        watch: {
            ignored: ["**/storage/framework/views/**"],
        },
    },
});
