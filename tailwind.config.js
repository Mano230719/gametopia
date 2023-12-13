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
      'full': '20px 20px 25px -5px rgba(0, 0, 0, 0.3)',
      }
    },
  },
  plugins: [],
}

