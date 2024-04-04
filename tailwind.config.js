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
        gray: '#f1f3f6',
        bubble: '#e0e4f4',
        brand: '#527aba',
        background: '#f4f8fd',
        website: {
          normal: '#5379f6',
          light: '#7c9cfc',
          button: '#4865d5',
        },
        footer: {
          dark: '#044088',
          light: '#015fc8',
        },
      },
      backgroundImage:{
        'binary': 'url("graphics/binary.png" )',
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
