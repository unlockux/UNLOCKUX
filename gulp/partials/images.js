var gulp            = require('gulp');
var plumber         = require('gulp-plumber');

// IMAGES
var imagemin        = require('gulp-imagemin');

const config          = require('../config').paths;

var dirpath         = config.dirpath;
var themepath       = config.themepath;

//var distsrc         = 'dist/ui/*';
var distsrc         = dirpath + 'ui/**/*';
var distdest        = themepath + 'ui/';

// grab the images from assets, optimise and put in dist
gulp.task('images', function(cb) {
    var options = [
        imagemin.gifsicle({interlaced: true}),
        imagemin.jpegtran({progressive: true}),
        imagemin.optipng({optimizationLevel: 5}),
        // 1 (normal) to 7 (very optimised)
        imagemin.svgo({
            plugins: [
                {removeViewBox: true},
                {cleanupIDs: false}
            ]
        })
    ];
    gulp.src(distsrc)
    .pipe(imagemin(options))
    .pipe(gulp.dest(distdest))
    cb();
});
