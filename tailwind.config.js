module.exports = {
  content: {
      relative: true,
      files: ['./resources/**/*.blade.php', './resources/**/*.js', './resources/**/*.vue'],
    },
  theme: {
    screens: {
      'sm': '640px',
      'md': '768px',
      'tablet': '850px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
      '3xl': '1921px',
    },
    extend: {
      colors: {
        gray: {
          light: '#f0f1f7',
          dark: '#F1F3F6',
          extraDark: '#EAEBF3'
        },
        bubble: '#DAE3F0',
        brand: '#527aba',
        background: '#f4f8fd',
        website: {
          normal: '#5379f6',
          light: '#7c9cfc',
          extra_light: '#E2EAFF',
        },
        navigation: '#FAFAFA',
        footer: {
          dark: '#044088',
          light: '#015fc8',
        },

      },
      fontFamily: {
        "sora": ["Sora", "sans-serif"]
      },
      backgroundImage:{
        'binary': 'url("/public/graphics/binary.svg" )',
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
