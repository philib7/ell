/*
** TailwindCSS Configuration File
**
** Docs: https://tailwindcss.com/docs/configuration
** Default: https://github.com/tailwindcss/tailwindcss/blob/master/stubs/defaultConfig.stub.js
*/
module.exports = {
    purge: {
      // Learn more on https://tailwindcss.com/docs/controlling-file-size/#removing-unused-css
      content: [
        '../**/**/**/*.php',
        '../**/**/*.php',
        '../**/*.php',
        '../*.php'
      ]
    },
    theme: {
      minHeight: {},
      transitionDuration: {},
      boxShadow: {},
      container: {
        center: true,
        padding: {
          default: '1rem',
          sm: '1rem',
          lg: '1rem',
          xl: '5rem'
        }
      },
      extend: {
        fontSize: {
          '7xl': [
            '4.5rem', {
              letterSpacing: '-0.02em',
              lineHeight: '1',
            }
          ],
          '8xl': [
            '6rem', {
              letterSpacing: '-0.02em',
              lineHeight: '1',
            }
          ],
        },
        margin: {
          14: '3.5rem'
        },
        padding: {
          14: '3.5rem'
        },
        height: {},
        width: {
          '47': '47.666%'
        },
        colors: {
          EllGrayLight: '#727380',
          EllGrayVeryLight: '#F1F2FA'
        },
        spacing: {},
        borderRadius: {},
        inset: {
          "1/2": '50%',
        },
        minHeight: {}
      }
    },
    variants: {},
    plugins: []
  }
