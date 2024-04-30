/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      boxShadow: {
      '3xl': '0 35px 60px -15px rgba(0, 0, 0, 0.3)',
      'full': '0 0 25px rgba(0, 0, 0, 0.3)',
      }
    },
  },
  plugins: [],
}

