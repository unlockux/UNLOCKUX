var gulp            = require('gulp');
var plumber         = require('gulp-plumber');

var dirpath         = '';
var themepath       = '';

// watch
gulp.task('watch', function(){
    gulp.watch(dirpath + 'assets/ui/**/*.*', ['images']);
    gulp.watch(dirpath + 'assets/js/**/*.*', ['scripts']);
    gulp.watch(dirpath + 'assets/scss/**/*.scss', ['sass']);
})
