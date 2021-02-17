var gulp            = require('gulp');
var plumber         = require('gulp-plumber');

// JS
var order           = require('gulp-order');
var concat          = require('gulp-concat');
var rename          = require('gulp-rename');
var uglify          = require('gulp-uglify');

const config          = require('../config').paths;

var dirpath         = config.dirpath;
var themepath       = config.themepath;

// optimise scripts
gulp.task('scripts', function(cb) {
    gulp.src(['assets/js/plugins/**/*.js', 'assets/js/main.js'])
        .pipe(concat('app.js'))
        //.pipe(uglify())
        .pipe(gulp.dest(themepath + 'js/'));
        cb();
});

gulp.task('scripts-minify', function(cb) {
    gulp.src(['assets/js/plugins/**/*.js', 'assets/js/main.js'])
        .pipe(concat('app.js'))
        .pipe(uglify())
        .pipe(gulp.dest(themepath + 'js/'));
        cb();
});
