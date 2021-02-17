var gulp                = require('gulp');
var iconfont            = require('gulp-iconfont');
var iconfontCss         = require('gulp-iconfont-css');
var runSequence         = require('run-sequence');
var runTimestamp        = Math.round(Date.now()/1000);

var fontName = 'VMCustomFont';
var cssClass = 'vm';

const config          = require('../config').paths;

var dirpath         = config.dirpath;
var themepath       = config.themepath;

gulp.task('icons', function(cb) {
    runSequence(
        ['iconfont'],
        ['moveIcons'],
        cb);
});

// run the svg to font task, converting the svgs AND setting up a scss file ready to be ran into the styles gulp
gulp.task('iconfont', function(cb){
  return gulp.src([dirpath + 'icons/*']) // Source folder containing the SVG images
    .pipe(iconfontCss({
      fontName: fontName, // The name that the generated font will have
      path: dirpath + 'scss/fonts/_template.scss', // The path to the template that will be used to create the SASS/LESS/CSS file
      targetPath: '../../scss/fonts/_icons.scss', // The path where the file will be generated
      fontPath: '../iconfont/', // The path to the icon font file
      cssClass: cssClass

    }))
    .pipe(iconfont({
      fontName: fontName, // Name of the font
      prependUnicode: false, // Recommended option
      formats: ['woff2'], //'ttf', 'eot', 'woff',
      normalize: true,
      fontHeight: 1001, // fixes badly rendered icons
      timestamp: runTimestamp, // Recommended to get consistent builds when watching files
      log: () => {} // suppress unnecessary logging
    }))
    .pipe(gulp.dest(dirpath + 'icons/iconfont'))
    cb();
});

// move the icons across to the dist folder
gulp.task('moveIcons', function(cb){
    gulp.src([dirpath + 'icons/iconfont/*.*'])
    .pipe(gulp.dest(themepath + 'iconfont/'))
    cb();
});



// WHAT DOES IT DO?
//
// 1. Create your SVG icon
// 2. Place it into 'iconfont' folder
// 3. Run the gulp script
//  a. locate all the icons (icons/*.svg)
//  b. give the font a name (this is in the route js file)
//  c. find the scss font template (_template.scss)
//  d. define which folder the scss file will render to (_icons.scss)
//  e. define where the font file will get rendered (iconFont)
//  f. define the font css class prefix (fi-XX)
//  g. Take all the files within the font folder (eot, ttf and woff)
//  h. Move these files to the dist icon folder
// 4. Now you can use the icon font as you would fontawsome, with your class 'prifix-SVGiconfilename'
//
// The font gets loaded in via CSS using the @fontFace rule
//
// gulp-iconfont bundles several plugins to bring a simpler API combining the function of gulp-svgicons2svgfont, gulp-svg2tff, gulp-ttf2eot and gulp-ttf2woff
