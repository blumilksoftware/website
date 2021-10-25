module.exports = {
  purge: {
    enabled: !process.env.ROLLUP_WATCH,
    content: [
      './src/**/*.svelte',
      './public/index.html',
    ],
  },
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
  variants: {},
  plugins: [
    require('@tailwindcss/forms')
  ],
}
