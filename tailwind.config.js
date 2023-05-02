/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors: {
            peach: "#eebbc3",
            navy: "#232946",
            lavenderGray: "#b8c1ec",
            white: "#fffffe",
        },
    },
  },
  plugins: [],
}

