module.exports = {
  purge: {
    enabled: !process.env.ROLLUP_WATCH,
    content: ['./src/**/*.svelte'],
  },
  theme: {
    extend: {},
  },
  variants: {},
  plugins: [],
}
