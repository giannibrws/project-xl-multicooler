const gulp = require('gulp');
const imagemin = require('gulp-imagemin');


function minifyImgs(){

    return gulp.src('assets/img/*'), gulp.src('assets/img/store/new/*')
        .pipe(imagemin())
        .pipe(gulp.dest('minified/new/img'));

}


// to call this use "gulp key"
exports.minifyImgs = minifyImgs;
