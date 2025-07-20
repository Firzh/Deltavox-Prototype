/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'electric-blue': '#00D4FF',
        'deep-blue': '#0066CC',
        'silver': '#C0C0C0',
        'dark-gray': '#2D2D2D',
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}