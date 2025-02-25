/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    // Include all PHP and template files where Tailwind classes may appear
    "./*.php",
    "./template-parts/**/*.php"
  ],
  theme: {
    extend: {
      colors: {
        gold: '#D4AF37', // Example color for the gold background
      },
    },
  },
  plugins: [],
}
