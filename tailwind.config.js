module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily:{
        body: ['Yanone Kaffeesatz'],
        body2:['Exo 2']
      },
      colors:{
        yellow: {
          250: '#fed049'
        }
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
