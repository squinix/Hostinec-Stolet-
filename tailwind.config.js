module.exports = {
  purge: [],
  theme: {
    extend: {
      width: {
        '96': '24rem'
      },
      fontFamily: {
        'sans': ['Roboto', 'sans-serif'],
      },
      opacity: {
        '85': '0.85'
      },
      height: {
        '128': '32rem'
      },
      container: {
        center: true,
        padding: {
          default: '0rem',
          sm: '2rem'
        }
      },
      backgroundColor: theme => ({
        'brown': '#533E2D',
        'gray': '#333'
      }),
      textColor: {
        'brown': '#533E2D',
      }
    },
  },
  variants: {},
  plugins: [],
}
