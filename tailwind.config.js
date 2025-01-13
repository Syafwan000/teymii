import { addDynamicIconSelectors } from '@iconify/tailwind'

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
        addDynamicIconSelectors()
    ],
};
