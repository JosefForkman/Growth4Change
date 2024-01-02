import defaultTheme from 'tailwindcss/defaultTheme'
import forms from '@tailwindcss/forms'

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/js/**/*.tsx',
  ],

  theme: {
    extend: {
      fontFamily: {
        heading: ['"Bebas Neue"', 'sans-serif'],
        body: ['"Open Sans"', 'sans-serif'],
      },
      colors: {
        growthgreen: '#5fa331',
        growthdarkgrey: '#333333',
        growthlightgrey: '#999999',
      },
    },
  },

  plugins: [forms],
}
