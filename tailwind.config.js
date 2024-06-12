/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      'jersey': ["Jersey 10"],
      'archivo': ["Archivo"],
    },
  },
  plugins: [
    require('daisyui'),
  ],
}

