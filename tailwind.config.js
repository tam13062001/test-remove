/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
module.exports = {
  experimental: {
    optimizeUniversalDefaults: false
  },
  content: ["./theme/**/*.php", './src/**/*.{js,tsx}'],
  theme: {
    extend: {
      colors: {
        primary: '#315CD4',
        secondary: '#3DA7F2',
        lightblue: '#C4E1F5'
      },
      fontFamily: {
        sans: 'Manrope'
      },
      container: {
        center: true
      },
      screens: {
        'ipadpro':'1024px',
        'ipadproplus':'1025px',
        'xxl':'1535px',
        '4xl': '2560px', // cho màn hình 4K trở lên
        '6xl': '3840px', 
        '8xl': '5120px',
      },
    }
  },
  corePlugins: {
    // preflight: false
  },
  plugins: [
      require('@tailwindcss/typography')
  ],
}
