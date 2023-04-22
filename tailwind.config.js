/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js}"],
  theme: {
    extend: {
      fontSize: {
        'xs': '.75rem',
        'sm': '.875rem',
        'base': '1rem',
        'lg': '1.125rem',
        'xl': '1.25rem',
        '2xl': '1.5rem',
        '3xl': '1.875rem',
        '4xl': '2.25rem',
        '5xl': '3rem',
        '6xl': '4rem',
        '7xl': '5rem',
        '8xl': '6rem',
        '9xl': '7rem',
        'step0': ['clamp(1.00rem, calc(0.96rem + 0.22vw), 1.13rem)'],
      },
      colors: {
        "ceria-light": "#f2e3c6",
        "ceria-cream": "#ffc6a5",
        "ceria-accent": "#e6324b",
        "ceria-text": "#2b2b2b",
        "ceria-dark": "#353634",
      },
      fontFamily: {
        sans: [
        'Plus Jakarta Sans', 
        'ui-sans-serif',
        'system-ui',
        '-apple-system',
        'BlinkMacSystemFont',
        'Segoe UI',
        'Roboto',
        'Helvetica Neue',
        'Arial',
        'Noto Sans',
        'sans-serif',
        'Apple Color Emoji',
        'Segoe UI Emoji',
        'Segoe UI Symbol',
        'Noto Color Emoji',
      ],
      }
    },
  },
  plugins: [],
};
