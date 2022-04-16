const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    100: "#e0e0fc",
                    200: "#c1c2f9",
                    300: "#a1a3f7",
                    400: "#8285f4",
                    500: "#6366f1",
                    600: "#4f52c1",
                    700: "#3b3d91",
                    800: "#282960",
                    900: "#141430"
                },
                secundary: {
                    100: "#cfd1d4",
                    200: "#a0a3a9",
                    300: "#70747d",
                    400: "#414652",
                    500: "#111827",
                    600: "#0e131f",
                    700: "#0a0e17",
                    800: "#070a10",
                    900: "#030508"
                },
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
            transform: ['active'],
        }
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
