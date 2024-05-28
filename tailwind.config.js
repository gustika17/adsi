/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}", "node_modules/preline/dist/*.js"],
  theme: {
    extend: {
      colors: {
        nav: "#FEEEC5",
        primary: "#6F0B0B",
      },
    },
  },
  plugins: [require("preline/plugin")],
};
