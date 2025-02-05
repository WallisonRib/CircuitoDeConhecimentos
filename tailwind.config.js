import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                circuit_green:'#71AC50',
                circuit_brown:'#68485F',
                color_container1and2: '#C36254',
                color_container3: '#D38D37',
                color_container4: '#8C697F',
                color_container5: '#6DAC4E',
                color_container6: '#93BEDA',
                color_container7and8: '#9A749B',
            },
        },
    },

    plugins: [forms],
};
