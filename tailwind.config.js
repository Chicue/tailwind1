/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      
      colors: {
        transparent: 'transparent',
        'fondo': '#fff',
        'primary': '#6C94D4',
        'secondary': '#67D5E0',
        'accent': '#61EDAA',
      },

    },
  },

  /*para variantes*/
  variants:{
    opacity: ['responsive', 'hover', 'focus', 'disabled'],
  },

  plugins: [],
}
