/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './public/index.php',
    './src/*/**.php',

    './node_modules/preline/dist/*.js',
  ],
  theme: {
    extend: {
      colors: {
        'text': 'rgb(var(--text))',
        'background': 'rgb(var(--background))',
        'primary': 'rgb(var(--primary))',
        'secondary': 'rgb(var(--secondary))',
        'accent': 'rgb(var(--accent))',
      },
      fontSize: {
        sm: '0.750rem',
        base: '1rem',
        xl: '1.333rem',
        '2xl': '1.777rem',
        '3xl': '2.369rem',
        '4xl': '3.158rem',
        '5xl': '4.210rem',
      },
      fontFamily: {
        heading: 'Gabarito',
        body: 'Plus Jakarta Sans',
      },
      fontWeight: {
        normal: '400',
        bold: '700',
      },
    },
  },
  plugins: [
    require('preline/plugin'),
  ],
  darkMode: "class",
};
