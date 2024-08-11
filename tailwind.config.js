/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./views/*.php",
    'node_modules/preline/dist/*.js',
  ],
  darkMode: 'selector',

  theme: {
    container: {
      center: true,
    },

    extend: {
      fontFamily: {
        sans: ['Open Sans', 'sans-serif'],
      },

      ringWidth: {
        DEFAULT: '0', 
      },
      ringColor: {
        DEFAULT: 'transparent', 
      },
      screens: {
        sm: '550px',
      },

     
    },
  },
  plugins: [
    require('preline/plugin'),
    require('@tailwindcss/forms'),
  ],
}

