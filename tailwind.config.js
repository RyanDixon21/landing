module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'biru': '#4F98CA',
        'mint': '#00FFCA',
        'head': '#088395',
        'foot': '#0A4D68',

      },
      fontFamily: {
        // Menetapkan Open Sans sebagai font default untuk semua elemen yang menggunakan `font-sans`
        sans: ['Open Sans', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
