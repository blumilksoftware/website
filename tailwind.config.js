module.exports = {
  purge: {
    enabled: !process.env.ROLLUP_WATCH,
    content: ['./src/**/*.svelte'],
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
