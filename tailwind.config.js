/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],

  /*tailwind.config.full.js*/ 
  theme: {
    extend: {
      
      colors: {
        transparent: 'transparent',
        'fondo': '#fff',
        'primary': '#f3c614',
        'secondary': '#353535',
        'accent': '#61EDAA',
      },

      /*estoy agregando una escala de medida mas*/
      height: {
        '80': '20rem', 
        '100': '25rem' 
      }

    },
  },

  /*para variantes*/
  variants:{
    opacity: ['responsive', 'hover', 'focus', 'disabled'],
  },

  plugins: [],
}
