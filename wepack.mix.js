const mix = require("laravel-mix");

// Compile JavaScript
mix.js("resources/js/app.js", "public/js");

// Compile CSS with Tailwind CSS
mix.postCss("resources/css/app.css", "public/css", [require("tailwindcss")]);
