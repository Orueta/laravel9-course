/** @type {import('tailwindcss').Config} */
module.exports = {
content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    ],
  theme: {
    // Container siempre centrado
    container: {
        center: true,
    },
    extend: {
        gridTemplateColumns: {
            // Simple 16 column grid
            '16': 'repeat(16, minmax(0, 1fr))',

            // Complex site-specific column configuration
            'footer': '200px minmax(900px, 1fr) 100px',
        }
    },
  },
  plugins: [],
}
