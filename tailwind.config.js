/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./views/*.php",
    'node_modules/preline/dist/*.js',
  ],
  darkMode: 'selector',

  theme: {
    extend: {
      fontFamily: {
        sans: ['Open Sans', 'sans-serif'],
      },

      screens: {
        sm: '550px',
      },
    },
  },
  plugins: [
    require('preline/plugin'),
  ],
}

