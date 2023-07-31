/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
  "./resources/**/*.js",
  "./resources/**/*.vue",
],
  theme: {
    container : {
      center : true,
      padding : '16px',
    },

    extend: {
      screens: {
        'sm': '600px',

        'md': '768px',

        'lg': '1024px',

        'xl': '1280px',

        '2xl': '1320px',
      },

      fontFamily : {
        "poppins" : ["Poppins"],
        "montserrat" : ["Montserrat"],
        "openSans" : ["Open Sans"],
        "jost" : ["Jost"],
        "montserratAlt" : ["Montserrat Alternates"]
      },

      boxShadow: {
        '3xl': '0px 4px 4px rgba(0, 0, 0, 0.25), 2px 2px 7px 2px rgba(0, 0, 0, 0.25)',
        'kategori' : "6px 7px 7px -1px rgba(0, 0, 0, 0.25)",
        'barang' : '8px 9px 6px -1px rgba(0, 0, 0, 0.25)',
      }
    },
  },

  plugins: [],
}

