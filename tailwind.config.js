/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            width: {
                '100': '25rem',
            },
            height: {
                '100': '26rem',
                '50': '13rem'
            }
        }
    },
  plugins: [],
}

