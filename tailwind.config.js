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
        gray: {
          light: '#F6F7FD',
          dark: '#F1F3F6',
        },
        bubble: '#DAE3F0',
        brand: '#527aba',
        background: '#f4f8fd',
        website: {
          normal: '#5379f6',
          light: '#7c9cfc',
        },
        navigation: '#FAFAFA',
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
