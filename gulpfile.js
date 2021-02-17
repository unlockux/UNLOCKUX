var gulp            = require('gulp');
var requireDir      = require('require-dir');
var dir             = requireDir('./gulp', {recurse: true});
var runSequence     = require('run-sequence');

gulp.task('default', function(cb) {
    runSequence(
        // ['icons'],
        ['sass'],
        ['scripts'],
        //['images'],
        ['watch'],
        cb);
});

gulp.task('minify', function(cb) {
    runSequence(
        ['icons'],
        ['sass-minify'],
        //['scripts-minify'],
        // ['images'],
        //['watch'],
        cb);
});
