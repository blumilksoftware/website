module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
      '3xl': '1855px',
    },
    extend: {
      colors: {
        bubble: '#e0e4f4',
        brand: '#527aba',
        background: '#f4f8fd',
        website: {
          normal: '#5379f6',
          light: '#7c9cfc',
        },
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
