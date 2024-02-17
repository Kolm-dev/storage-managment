/**
 * Webpack Mix configuration file.
 * @file FILEPATH: /home/ruslan/projects/storage-managment/storage-management-api/webpack.mix.js
 */
let mix = require("laravel-mix");

mix.js("src/app.js", "public/js").browserSync({
    proxy: "localhost:8000",
    files: [
        "app/**/*.php",
        "resources/views/**/*.php",
        "public/js/**/*.js",
        "public/css/**/*.css",
    ],
});
