/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    // path/to/template/files
    // "./src/**/*.{html,js}"
    // ex: /resources/views/welcome.blade.php
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      'serif': ['Georgia']
    },

    extend: {
      animation:{
        fadeIn: 'fadeIn 1s ease-in'
      },
      keyframes: {
        fadeIn:{
          '0%': {opacity: 0, transform: 'rotateX(-10deg)'},
          '100%': {opacity: 1, transform: 'rotateX(0)'},
        }
      }
    },
  },
  plugins: [],
}