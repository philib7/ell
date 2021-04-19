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
        margin: {},
        height: {},
        colors: {},
        spacing: {},
        borderRadius: {},
        inset: {
          "1/2": '50%'
        },
        minHeight: {}
      }
    },
    variants: {},
    plugins: []
  }
  