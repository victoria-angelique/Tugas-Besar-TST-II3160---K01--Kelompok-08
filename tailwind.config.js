/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/Views/**/*.php"],
  theme: {
    fontFamily : {
      title:["'Nunito'", "sans-serif"],
      text:["'Inter'", "sans-serif"],
    },
    extend: {},
  },
  plugins: [require("daisyui")],
}

