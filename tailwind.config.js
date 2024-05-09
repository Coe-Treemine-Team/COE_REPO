module.exports = {
    content: [
        "./pages/**/*.{js,ts,jsx,tsx}",
        "./components/**/*.{js,ts,jsx,tsx}",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: "class", // or 'media'
    theme: {
        extend: {
            colors: {
                "brand-blue": "#1992d4",
                "brand-red": "#e3342f",
                "navbar-gray": "#f5f5f5", // Custom color for the navbar
            },
            spacing: {
                128: "32rem",
                144: "36rem",
                "navbar-padding": "1rem", // Custom padding for the navbar
            },
            fontFamily: {
                sans: ["Graphik", "sans-serif"],
                serif: ["Merriweather", "serif"],
            },
        },
    },
    variants: {
        extend: {
            borderColor: ["focus-visible"],
            opacity: ["disabled"],
        },
    },
    plugins: [],
};
