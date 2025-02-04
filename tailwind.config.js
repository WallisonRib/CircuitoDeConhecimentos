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
                verdecircuito:'#71AC50',
                marromcircuito:'#68485F',
                cor_container1e2: '#C36254',
                cor_container3: '#D38D37',
                cor_container4: '#8C697F',
                cor_container5: '#6DAC4E',
                cor_container6: '#93BEDA',
                cor_container7e8: '#9A749B',
            },
        },
    },

    plugins: [forms],
};
