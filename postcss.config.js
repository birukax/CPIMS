const purgecss = require("@fullhuman/postcss-purgecss");

module.exports = {
    plugins: {
        purgecss: {
            content: [
                "./storage/framework/views/*.php",
                "./resources/views/**/*.blade.php",
            ],
        },
        tailwindcss: {},
        autoprefixer: {},
    },
};
