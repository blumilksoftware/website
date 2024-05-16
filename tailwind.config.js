module.exports = {
  content: {
      relative: true,
      files: ['./resources/**/*.blade.php', './resources/**/*.js', './resources/**/*.vue'],
      transform: (content) => content.replace(/taos:/g, ''),
    },
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
          light: '#F5F6FA',
          dark: '#F1F3F6',
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
    require('taos/plugin'),
  ],
  safelist: [
    '!duration-[0ms]',
    '!delay-[0ms]',
    'html.js :where([class*="taos:"]:not(.taos-init))'
  ],
}
