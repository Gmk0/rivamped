import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */

const colors = require('tailwindcss/colors');
export default {
    darkMode:'class',
    presets: [
        require('./vendor/wireui/wireui/tailwind.config.js')
    ],
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './vendor/awcodes/filament-tiptap-editor/resources/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js",
        './vendor/wireui/wireui/resources/**/*.blade.php',
        './vendor/wireui/wireui/ts/**/*.ts',
        './vendor/wireui/wireui/src/View/**/*.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                info: colors.sky["500"],
                accent: "#5f5af6",
                "accent-focus": "#4d47f5",

                findDark: colors.gray,
                secondary: colors.slate,
                fila: "#fcf9f6",
                find: colors.orange,
                danger: colors.rose,
                primary: colors.yellow,
                success: colors.green,
                warning: colors.yellow,
            },
        },
    },


    plugins: [forms, typography, require('flowbite/plugin'),],
};
