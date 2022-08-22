const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                'baseBlue': '#005BA0',
                'linkColor': '#8B5CF6',
                'sky': '#0EA5E9',
                'black-text' : '#1d1d1b',
            },
            fontFamily: {
                sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                'cover-image': "url('/images/varosunk/nagymaros_banner-scaled.jpeg')",
            }
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
