module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      backgroundImage: {
        'mybg' : "url{'/images/bikebike.jpeg')",
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
