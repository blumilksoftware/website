/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './src/**/*.svelte',
    './index.html',
  ],
  theme: {
    maxWidth: {
      '1/4': '25%',
      '1/3': '33%',
      '1/2': '50%',
      '3/4': '75%',
    },
    extend: {
      colors: {
        brand: '#527aba',
        background: '#f4f8fd',
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
