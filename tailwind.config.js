const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt'
    ],
    theme: {
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '0rem'
            },
        },
        extend: {
            colors: tailpress.colorMapper(tailpress.theme('settings.color.palette', theme)),
            fontSize: tailpress.fontSizeMapper(tailpress.theme('settings.typography.fontSizes', theme)),
            backgroundImage: {
                'main': "url('/wp-content/themes/realtyone/img/bg1.jpg')",
                'home': "url('/wp-content/themes/realtyone/img/bg2.jpg')",
                'three': "url('/wp-content/themes/realtyone/img/bg3.jpg')",
                'four': "url('/wp-content/themes/realtyone/img/bg4.jpg')",
                'five': "url('/wp-content/themes/realtyone/img/bg5.jpg')",
                'six': "url('/wp-content/themes/realtyone/img/bg6.jpg')",


              },
        },
        screens: {
            'xs': '480px',
            'sm': '600px',
            'md': '782px',
            'lg': tailpress.theme('settings.layout.contentSize', theme),
            'xl': tailpress.theme('settings.layout.wideSize', theme),
            '2xl': '1440px'
        }
    },
    plugins: [
        tailpress.tailwind,
        require('daisyui')
    ]
};
