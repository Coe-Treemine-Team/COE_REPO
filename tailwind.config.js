/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [],
};
module.exports = {
    extend: {
        // Extend or add custom colors, spacing, etc., specifically for the navbar
        colors: {
            "navbar-gray": "#f5f5f5", // Custom color
        },
        spacing: {
            "navbar-padding": "1rem", // Custom spacing
        },
    },
};
