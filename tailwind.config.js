import { addDynamicIconSelectors } from '@iconify/tailwind'
import tailwindcssMotion from "tailwindcss-motion"

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                'manrope': ['Manrope', 'sans-serif'],
            }
        },
    },
    plugins: [
        addDynamicIconSelectors(),
        tailwindcssMotion
    ],
};
