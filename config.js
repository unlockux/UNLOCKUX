var src = './assets';
var dist = 'dist';
var distAssets = dist + '/assets';

module.exports = {
    paths: {
        src: src,
        dest: dist
    },
    iconFont: {
        // src: src + '/fonts/svg/temp/**/*.svg',
        src: src + '/icons/*.svg',
        dest: 'dist/fonts/', // where the font files get saved after being generated
        copySrc: src + '/fonts/svg/**/*.svg', // where the source icons are
        copyDest: src + '/fonts/svg/temp', // where the icons get temporarily copied to while the font is generated
        copySvgSrc: src + '/fonts/svg/*.svg', // where the source icons are
        copySvgDest: distAssets + '/fonts/svg', // where the icons should be placed
        options: {
            normalize: true,
            fontName: 'iconfont', // the filename of the font (e.g. iconfont.woff)
            appendCodepoints: true,
            fontHeight: 1001 // fixes badly rendered icons
        },
        template: {
            src: src + '/scss/fonts/_template.scss', // where the sass template is
            dest: src + '/scss/fonts/', // where to save the generated scss partial
            sassPartialName: '_iconfont.scss', // the name of the generated scss partial
            options: {
                fontPath: '../fonts/', // path to font directory, relative to the production CSS file
                className: 'fi' // what should the icon class be prefixed with? E.g.`[prefix]-chevron`
            }
        }
    }
}
