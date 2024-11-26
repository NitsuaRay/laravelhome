import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#1d3983',
                secondary: '#e97d61',
                white: '#fff',
            },
            backgroundColor: {
                'primary': '#1d3983',
                'secondary': '#e97d61',
                'primary-half': 'rgba(29,57,131,.5)',
                'secondary-half': 'rgba(233,125,97,.5)',
            },
            fontSize: {
                '6xl': '5rem',
                '7xl': '7rem',
            },
            borderWidth: {
                '3': '3px',
                '5': '5px',
            },
            borderColor: {
                'primary': '#1d3983',
                'secondary': '#e97d61',
            },
            textColor: ['active'],
            fontWeight: ['active'],
            spacing: {
                '2.5': '3rem',
                'small': '0.5rem',
                'medium': '2rem',
            },
            fontSize: {
                'xs': '.5rem',
                's': '1rem',
            }
        },
    },

    plugins: [forms],
};
