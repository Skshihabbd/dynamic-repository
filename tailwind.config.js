/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
  theme: {
    extend: {
        boxShadow: {
        'custom': '0 0 1px 1px rgba(0, 0, 0, 0.25)',
      },
    },
  },
  plugins: [require('daisyui'),],
}

