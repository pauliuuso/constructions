const gulp = require("gulp"),
    sass = require("gulp-sass"),
    plumber = require("gulp-plumber"),
    notify = require("gulp-notify"),
    rename = require("gulp-rename"),
    sourcemaps = require("gulp-sourcemaps"),
    concat = require("gulp-concat"),
    uglify = require("gulp-uglify-es").default();

const assetsDir = "assets";

gulp.task("sass", function() {
    gulp
        .src(assetsDir + "/sass/style.scss")
        .pipe(
            plumber({ errorHandler: notify.onError("Sass error: <%= error.message %>") })
        )
        .pipe(
            sass({
                sourceComments: "map",
                sourceMap: "sass",
                imagePath: "img",
                outputStyle: "compressed"
            })
        )
        .pipe(rename("style.min.css"))
        .pipe(gulp.dest(""));
});

gulp.task("js", function() {
    gulp
        .src(assetsDir + "/js/**/*.js")
        .pipe(
            plumber({ errorHandler: notify.onError("JS error: <%= error.message %>") })
        )
        .pipe(sourcemaps.init())
        .pipe(concat("app.min.js"))
        .pipe(uglify)
        .pipe(sourcemaps.write("."))
        .pipe(gulp.dest(""));
});

gulp.task("watch", function() {
    gulp.watch(assetsDir + "/sass/**/*.scss", ["sass"]);
    gulp.watch(assetsDir + "/js/**/*.js", ["js"]);
});

gulp.task("build", ["js", "sass"]);