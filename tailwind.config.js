module.exports = {
  content: {
      relative: true,
      files: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
      ],
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
          extraLight: '#F5F6FA',
          light: '#F0F1F7',
          dark: '#F1F3F6',
          extraDark: '#EAEBF3',
        },
        blue: {
          dark: "#000033",
          normalNeon: '#3461fd',
          normal: '#3259E8',
          light: '#F7F8FD',
        },
        bubble: '#DAE3F0',
        brand: '#527ABA',
        website: {
          normal: '#5379F6',
          light: '#7C9CFC',
          extra_light: '#E2EAFF',
          dark: '#4865D5',
        },
        footer: {
          dark: '#044088',
          light: '#015FC8',
        },
      },
      fontFamily: {
        sora: ['Sora', 'sans-serif'],
      },
    },
    listStyleType: {
      square: 'square',
    }
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],
};
