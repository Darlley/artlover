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
                primary: colors.indigo,
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
