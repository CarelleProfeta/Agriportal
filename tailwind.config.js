const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            colors: {
                green: {
                light: '#66cc33',
                default: '#008000',
                midDark: '663300',
                dark: '#336633',
                },
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                customFont: ['Dancing script'],
                poppins: ['Poppins'],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
