const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    // theme: {
    //     extend: {
    //         fontFamily: {
    //             sans: ['Nunito', ...defaultTheme.fontFamily.sans],
    //         },
    //     },
    // },
    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                white: '#ffffff',
                cardinal: '#ad343e',
                strongred: '#7a3e43',
                davysgrey: '#474747',
                metalicsun: '#9d7b38',
                yellow: '#f2af29',
                nickel: '#707067',
                eggshell: '#e0e0ce',
                'azul-3': '#05183c',
                'azul-2': '#06296b',
                'azul-1': '#1a3c7d',
                'negro-1': '#101217',
                'negro-2': '#0c0d0d',
                'silver': '#ecebff',
                'rojo-2': '#530308',
                'rojo-1': '#7c141a',
            },
        },
    },




    plugins: [require('@tailwindcss/forms')],
};
