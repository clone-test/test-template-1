/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  mode: 'jit',
  darkMode: 'class',
  theme: {
    extend: {
      fontFamily: {
        body: ['"Open Sans"'],
      },
      backgroundImage: {
        "hero-mobile": "url('/img/banner-mobile.png')",
        "hero-desktop": "url('/img/banner-desktop.png')",
      },
      lineHeight: {
        "extra-loose": "2.5",
        12: "3rem",
      },
      colors: {
        primary: 'var(--color-primary)',
        secondary: 'var(--color-secondary)',
        third: 'var(--color-third)',
        darkGray: 'var(--color-darkGray)',
        mediumGray: 'var(--color-mediumGray)',
        neutralGray: 'var(--color-neutralGray)',
        lightGray: 'var(--color-lightGray)',
        grayWhite: 'var(--color-grayWhite)',
        navGray: 'var(--color-navGray)',
        light: '#ffffff',
        dark: '#171717',
    },
      height: {
        100: "26rem",
        120: "28rem",
        128: "32rem",
      },
    },
  },
  plugins: [],
}
