/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./public/**/*.blade.php",
    "./public/**/*.js",
    "./public/**/*.vue",
  ],
  theme: {
    extend: {
      
      screens: {
        sm: '480px',
        md: '768px',
        lg: '976px',
        xl: '1440px',
      },

      fontFamily:{
        'display': ['Poppins', 'sans-serif'],
        'body': ['Montserrat', 'sans-serif']
      },

      colors:{

        containerColor: '#B3D1FF',
        mainInputColor: '#EEF3FC',
        mainBodyColorAlt: '#1B1C1E',

        primary: {
          0:   '#D5DEED', 
          100: '#AABEDB', 
          200: '#82b4ff', 
          300: '#557DB7', 
          400: '#2B5CA5', /* MAIN COLOR */
          500: '#224A84', 
          600: '#1A3763', 
          700: '#112542', 
          800: '#091221'
        },
     
        light: {
          0:   '#FFFFFF', 
          100: '#EAEFF6', 
          200: '#D5DEED', 
          300: '#BFCEE4', 
          400: '#AABEDB', 
          500: '#95AED2', 
          600: '#809DC9', 
          700: '#6B8DC0', 
          800: '#557DB7', 
          900: '#406CAE', 
          1000:'#2B5CA5'
        },
     
        dark:{
          0:   '#2B5CA5', 
          100: '#275395', 
          200: '#224A84', 
          300: '#1E4073', 
          400: '#1A3763', 
          500: '#162E53', 
          600: '#112542', 
          700: '#0D1C31', 
          800: '#091221', 
          900: '#040910', 
          1000:'#000000'
        },

        secondary: {
          0:   '#F9D2D3', 
          100: '#F3A5A6', 
          200: '#EC777A', 
          300: '#E64A4D', 
          400: '#E01D21', /* SECONDARY COLOR */
          500: '#B3171A', 
          600: '#861114', 
          700: '#5A0C0D', 
          800: '#2D0607'
        },

        alert: {
          0: '#FFF5DE', 
          100: '#FFEBBD', 
          200: '#FEE09B', 
          300: '#FED67A', 
          400: '#FECC59', 
          500: '#CBA347', 
          600: '#987A35', 
          700: '#665224', 
          800: '#332912'
        }
      },
    },
  },
  plugins: [],
}