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
      }
    }
  },
  corePlugins: {
    // preflight: false
  },
  plugins: [
      require('@tailwindcss/typography')
  ],
}
