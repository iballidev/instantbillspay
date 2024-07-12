/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {},
    colors: {
      // "primary": {
      //   500: "#b00020"
      // },
      "theme-clr-primary": 'hsl(var(--theme-clr-primary) / <alpha-value>)',
      "on-theme-clr-primary": 'hsl(var(--on-theme-clr-primary) / <alpha-value>)'
    }
  },
  plugins: [],
}

