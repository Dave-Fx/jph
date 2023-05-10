/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
      'primary': '#313838',
      'secondary': '#B0906B',
      'face1': '#996714',
      'face2': '#F3DA76',
      'face3': '#A2731E',
    },
    backgroundImage: {
      'texture': "url('../../public/assets/img/textura.webp')",
      'textureRight': "url('../../public/assets/img/textura_right.webp')",
      'textureLeft': "url('../../public/assets/img/textura_left.webp')",
      'header': "url('../../public/assets/img/header/atardecer.webp')",
      'building': "url('../../public/assets/img/projects/building.webp')",
      'bono': "url('../../public/assets/img/popup/web_escritorio.gif')",
    },
    },
    fontFamily: {
      'urbanist': ['Urbanist','sans-serif'],
      'canvas': ['Canvas','sans-serif'],
    },
    
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
