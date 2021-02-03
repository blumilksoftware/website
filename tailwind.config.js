module.exports = {
  purge: {
    enabled: !process.env.ROLLUP_WATCH,
    content: [
      './src/**/*.svelte',
      './public/index.html',
    ],
  },
  theme: {
    extend: {
      colors: {
        brand: '#527aba'
      },
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/forms')
  ],
}
