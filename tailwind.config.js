/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './template-parts/**/*.php',
    './inc/**/*.php',
    './src/scss/**/*.scss',
    './src/js/**/*.js'
  ],

  theme: {
    extend: {

      fontFamily: {
        "roboto": ['Roboto', 'sans-serif']
      },
      
      colors: {
        primary: 'red',
        secondary: 'blue'
      },

      // TYPOGRAPHY SCALE
      fontSize: {
        xs: ['0.75rem', { lineHeight: '1rem' }],
        sm: ['0.875rem', { lineHeight: '1.25rem' }],
        base: ['1rem', { lineHeight: '1.6' }],
        lg: ['1.125rem', { lineHeight: '1.75rem' }],
        xl: ['1.25rem', { lineHeight: '1.75rem' }],
        '2xl': ['1.5rem', { lineHeight: '2rem' }],
        '3xl': ['1.875rem', { lineHeight: '2.25rem' }],
        '4xl': ['2.25rem', { lineHeight: '2.5rem' }],
        '5xl': ['3rem', { lineHeight: '1.1' }],
        '6xl': ['3.75rem', { lineHeight: '1.1' }],
        '7xl': ['4.5rem', { lineHeight: '1' }],
        '8xl': ['6rem', { lineHeight: '1' }],
      },

      // OPTIONAL: container system (very useful for WP themes)
      maxWidth: {
        container: '1200px',
        content: '800px',
        wide: '1400px'
      }
    }
  },

  plugins: []
};