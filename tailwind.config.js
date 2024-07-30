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
                sans: ['Varela', ...defaultTheme.fontFamily.sans],
                mono: ['Faringa', ...defaultTheme.fontFamily.sans],
                serif: ['Dangrek', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'green-1': '#CDFA89', // Replace with actual HEX/RGB value
                'green-2': '#0BAF73', // Replace with actual HEX/RGB value
                'green-3': '#138A5F', // Replace with actual HEX/RGB value
                'green-4': '#004D3F', // Replace with actual HEX/RGB value
                'green-5': '#002E25', // Replace with actual HEX/RGB value
                'gray-2': '#B0B0B0',  // Gray
                'gray-3': '#808080',  // Medium gray
                'gray-4': '#505050',  // Dark gray
                'gray-5': '#303030',  // Very dark gray
            },
        },
    },

    daisyui: {
        themes: ["light"],
    },

    plugins: [
        forms,
        require('daisyui'),
        function ({ addUtilities }) {
            addUtilities({
                '.stroke': {
                    position: 'relative',
                    display: 'inline-block',
                },
                '.stroke::before': {
                    content: 'attr(data-text)',
                    position: 'absolute',
                    top: '0',
                    left: '0',
                    zIndex: '-1',
                    color: '#000', /* Stroke color */
                    fontSize: 'inherit',
                    fontFamily: 'inherit',
                    fontWeight: 'inherit',
                    letterSpacing: 'inherit',
                    textShadow: '-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000',
                },
            }, ['responsive', 'hover']);
        },
    ],
};
