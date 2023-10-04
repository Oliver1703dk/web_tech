/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        backgroundImage: {
            'BNG-pattern': "url('Images/BNG.png')",
            'footer-texture': "url('/img/footer-texture.png')",
        },
        extend: {},
    },
    plugins: [],
}
