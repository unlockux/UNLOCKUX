var gulp            = require('gulp');
var plumber         = require('gulp-plumber');

// Scss to css packages
var sass            = require('gulp-sass');
var postcss         = require('gulp-postcss');
var autoprefixer    = require('autoprefixer');
var cssnano         = require('cssnano');
var sourcemaps      = require('gulp-sourcemaps');
var rename          = require('gulp-rename');

const config        = require('../config').paths;

var dirpath         = config.dirpath;
var themepath       = config.themepath;

gulp.task('sass', function () {
    var processors = [
        autoprefixer({overrideBrowserslist: ['last 1 version']}),
        //cssnano(),
    ];
    return gulp.src(dirpath + 'scss/main.scss')
    .pipe(plumber())
    .pipe(sass())
    .pipe(rename('app.css'))
    .pipe(postcss(processors)) // preprocess and nano css
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(themepath + 'css/'));
});


gulp.task('sass-minify', function () {
    var processors = [
        // autoprefixer({overrideBrowserslist: ['last 1 version']}),
        cssnano(),
    ];
    return gulp.src(dirpath + 'scss/main.scss')
    .pipe(plumber())
    .pipe(sass())
    .pipe(rename('app.css'))
    .pipe(postcss(processors)) // preprocess and nano css
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(themepath + 'css/'));
});
