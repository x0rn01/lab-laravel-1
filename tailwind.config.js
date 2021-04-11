const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            color: {
                transparent: 'transparent',
                current: 'currentColor',

                black: colors.black,
                white: colors.white,
                gray: colors.trueGray,
                'gray-background': '#f7f8fc',
                'blue': '#328af1',
                'blue-hover': '#2879bd',
                yellow: colors.amber,
                red: colors.red,
                green: colors.emerald,
                purple: colors.violet,
            },
            spacing: {
                22: '5.5rem',
                70: '17.5rem',
                76: '19rem',
                104: '26.5rem',
                175: '43.75rem'
            },
            maxWidth: {
                custom: '68.5rem'
            },
            fontSize: {
                xxs: ['0.625rem', {lineHeight: '1rem'}]
            },
            fontFamily: {
                sans: ['Open Sans', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/line-clamp')
    ],

};
