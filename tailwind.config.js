const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        screens: {
            'xs': '0px',
            ...defaultTheme.screens,
            '3xl': '1920px',
            '4xl': '2800px',
        },
        extend: {
            colors: {
                'primary': {
                    50: '#f2eaff',
                    100: '#e3d3ff',
                    200: '#caaaff',
                    300: '#af7fff',
                    400: '#9354ff',
                    500: '#7a2bff',
                    'default': '#5f00ff',
                    700: '#4e00d3',
                    800: '#3f00aa',
                    900: '#2f007f',
                },
                'dark-primary': {
                    50: '#021400',
                    100: '#052b00',
                    200: '#0a5400',
                    300: '#107f00',
                    400: '#15aa00',
                    500: '#1ad300',
                    'default': '#20ff00',
                    700: '#73ff78',
                    800: '#8eff92',
                    900: '#abffae',
                },
                'secondary': '#fbf9ff',
                'dark-secondary': '#38463a',
                'light': {
                    50: '#f6f3f5',
                    100: '#ebe7eb',
                    200: '#dad0d8',
                    300: '#c7b9c4',
                    400: '#b3a1b0',
                    500: '#a28a9d',
                    'default': '#8f738a',
                    700: '#765f72',
                    800: '#604c5c',
                    900: '#473945',
                },
                'dark-light': {
                    50: '#080b09',
                    100: '#131713',
                    200: '#242e26',
                    300: '#38463a',
                    400: '#4b5d4e',
                    500: '#5c7461',
                    'default': '#708c75',
                    700: '#889f8c',
                    800: '#9eb2a2',
                    900: '#b7c5b9',
                },
                'dark': '#0f0029',
                'dark-dark': '#151515',
                'black': '#0e0e0e',
                'dark-black': '#0e0e0e'
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
