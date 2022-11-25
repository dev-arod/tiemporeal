const mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js").postCss(
    "resources/css/app.css",
    "public/css",
    [
        //
    ]
);

mix.sass("resources/css/main.scss", "public/css/app.css");

mix.js("resources/js/app.js", "public/js");
mix.js("resources/js/tasks.js", "public/js");
mix.js("resources/js/getdata.js", "public/js");
mix.js("resources/js/sweetalert/notifications.js", "public/js");
