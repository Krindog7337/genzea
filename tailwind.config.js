/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js}"],
  // darkMode: "class",
  theme: {
    extend: {
      fontSize: {
        step0: ["clamp(1.00rem, calc(0.96rem + 0.22vw), 1.13rem)"],
      },
      colors: {
        "ceria-light": "#f2e3c6",
        "ceria-cream": "#ffc6a5",
        "ceria-accent": "#e6324b",
        "ceria-text": "#2b2b2b",
        "ceria-dark": "#353634",
        "whatsapp-teal-green": "#128c7e",
      },
      fontFamily: {
        sans: [
          "Plus Jakarta Sans",
          "ui-sans-serif",
          "system-ui",
          "-apple-system",
          "BlinkMacSystemFont",
          "Segoe UI",
          "Roboto",
          "Helvetica Neue",
          "Arial",
          "Noto Sans",
          "sans-serif",
          "Apple Color Emoji",
          "Segoe UI Emoji",
          "Segoe UI Symbol",
          "Noto Color Emoji",
        ],
      },
    },
  },
  plugins: [],
};
