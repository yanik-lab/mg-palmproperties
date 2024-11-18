const { watch, series } = require("gulp");
const { src, dest } = require("gulp");

const rename = require("gulp-rename");
const concat = require("gulp-concat");
const uglify = require("gulp-uglify");
const plumber = require("gulp-plumber");
const sass = require("gulp-sass")(require("sass")); // Mise à jour ici
const cleanCSS = require("gulp-clean-css");
const purgecss = require("gulp-purgecss");

const themePath = "wp-content/themes/mgpalmproperties/";
const sassSRCPath = themePath + "css/scss/";
const libsCSSSRCPath = themePath + "css/libs/";
const jsSRCPath = themePath + "js/";

// SASS TO CSS
function generateCSS() {
    return src(sassSRCPath + "app.scss")
        .pipe(sass().on("error", sass.logError))
        .pipe(concat("style.css"))
        .pipe(dest(themePath));
}
function purgeCSS() {
    return src(themePath + "style.css")
        .pipe(
            purgecss({
                content: [themePath + "**/*.php", themePath + "js/**/*.js"],
            })
        )
        .pipe(concat("style.purge.css"))
        .pipe(dest(themePath));
}
function minifyCSS() {
    return src(themePath + "style.purge.css")
        .pipe(cleanCSS({ compatibility: "ie8" }))
        .pipe(rename("style.min.css"))
        .pipe(dest(themePath));
}

// LIBS TO CSS
function generateLibsCss() {
    return src(libsCSSSRCPath + "*.css")
        .pipe(sass().on("error", sass.logError))
        .pipe(concat("libs.css"))
        .pipe(dest(themePath + "css/"));
}
function purgeLibsCss() {
    return src(themePath + "css/libs.css")
        .pipe(
            purgecss({
                content: [themePath + "**/*.php", themePath + "js/**/*.js"],
            })
        )
        .pipe(concat("libs.purge.css"))
        .pipe(dest(themePath + "css/"));
}
function minifyLibsCss() {
    return src(themePath + "css/libs.purge.css")
        .pipe(cleanCSS({ compatibility: "ie8" }))
        .pipe(rename("libs.min.css"))
        .pipe(dest(themePath + "css/"));
}

// JS
function minifJS() {
    return src(jsSRCPath + "app.js")
        .pipe(uglify())
        .pipe(rename("app.min.js"))
        .pipe(dest(jsSRCPath));
}

// LIBS JS
function generateLibsJS() {
    return src(jsSRCPath + "libs/**/*.js")
        .pipe(plumber())
        .pipe(concat("libs.js"))
        .pipe(dest(jsSRCPath));
}
function minifyLibsJS() {
    return src(jsSRCPath + "libs.js")
        .pipe(uglify())
        .pipe(rename("libs.min.js"))
        .pipe(dest(jsSRCPath));
}

// Séquence des tâches CSS
const css = series(
    generateCSS,
    purgeCSS,
    minifyCSS
    // generateLibsCss,
    // purgeLibsCss,
    // minifyLibsCss
);

// Séquence des tâches JS
const js = series(minifJS, generateLibsJS, minifyLibsJS);

// Tâche par défaut
exports.default = function () {
    watch(sassSRCPath + "*.scss", { ignoreInitial: false }, css);
    watch(jsSRCPath + "app.js", { ignoreInitial: false }, js);
};
