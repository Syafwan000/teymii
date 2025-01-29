import tailwindcssMotion from "tailwindcss-motion"
import defaultTheme from 'tailwindcss/defaultTheme'
import { addDynamicIconSelectors } from '@iconify/tailwind'

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: ['class'],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                'sans': ['Manrope', ...defaultTheme.fontFamily.sans],
            }
        },
    },
    plugins: [
        addDynamicIconSelectors(),
        tailwindcssMotion
    ],
};
