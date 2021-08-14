const gulp = require('gulp');
const sass = require('gulp-sass');
var cleanCss = require('gulp-clean-css');
var concat = require('gulp-concat');

//compile scss into css
function minStyle() {
    return gulp.src('./assets/scss/style.scss')
        .pipe(sass())
        .on('error', sass.logError)
      .pipe(concat('style.min.css'))
        .pipe(cleanCss())
        .pipe(gulp.dest('./assets/css'))
}

function minCustomizerStyle() {
    return gulp.src('./assets/customizer/scss/style.scss')
        .pipe(sass())
        .on('error', sass.logError)
       .pipe(concat('customizer.min.css'))
        .pipe(cleanCss())
        .pipe(gulp.dest('./assets/css'))
}
function prodStyle() {
    return gulp.src('./assets/scss/style.scss')
        .pipe(sass())
        .on('error', sass.logError)
        .pipe(concat('style.css'))
        //.pipe(cleanCss())
        .pipe(gulp.dest('./assets/css'))
}
function prodCustomizerStyle() {
    return gulp.src('./assets/customizer/scss/style.scss')
        .pipe(sass())
        .on('error', sass.logError)
        .pipe(concat('customizer.css'))
        //.pipe(cleanCss())
        .pipe(gulp.dest('./assets/css'))
}
function watch() {
    gulp.watch('./assets/scss/**/*.scss', minStyle)
    gulp.watch('./assets/customizer/scss/**/*.scss', minCustomizerStyle)
}
exports.prodStyle = prodStyle;
exports.prodCustomizerStyle = prodCustomizerStyle;
exports.scssStyle = minStyle;
exports.scssWatch = watch;
exports.scssCustomizer = minCustomizerStyle;