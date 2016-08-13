var gulp = require('gulp');
var less = require('gulp-less');
var path = require('path');
var browserSync = require('browser-sync');

function copy_jquery() {
    gulp.src('./bower_components/jquery/dist/jquery.js')
        .pipe(gulp.dest('./js'));
}

function copy_normalize_css(){
    gulp.src('./bower_components/normalize-css/normalize.css')
        .pipe(gulp.dest('./css'));

}
function copy_bootstrap(){
    gulp.src('./bower_components/bootstrap/dist/css/bootstrap.css')
        .pipe(gulp.dest('./css'));
    gulp.src('./bower_components/bootstrap/dist/js/bootstrap.js')
        .pipe(gulp.dest('./js'));
}
function copy_files(){
    copy_jquery();
    copy_bootstrap();
    copy_normalize_css();
}

gulp.task('browsersync',  function(){
    browserSync({
        files: ['*.css', '*.php'],
        open: true,
        port: 3000,
        proxy: 'static-to-wordpress.dev'
    });
});
gulp.task('less', function(){
    return gulp.src('./less/**/*.less')
        .pipe(less({
            paths: [ path.join(__dirname, 'less')] //, 'includes') ]
        }))
        .pipe(gulp.dest('./'));
});

gulp.task('copy_files', copy_files);

gulp.task('default', ['less', 'browsersync'], function(){
    gulp.watch(['less/*.less'], ['less']);
});
