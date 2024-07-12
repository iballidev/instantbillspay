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
      "theme-clr-primary-alt": 'hsl(var(--theme-clr-primary-alt) / <alpha-value>)',
      "on-theme-clr-primary": 'hsl(var(--on-theme-clr-primary) / <alpha-value>)',
      "black": '#0a0909',
      "transparent": "transparent",

    }
  },
  plugins: [],
}

