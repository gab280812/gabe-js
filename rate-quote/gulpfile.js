
var gulp           = require('gulp'),
    concat         = require('gulp-concat'),
    uglify         = require('gulp-uglify'),
    cleanCSS       = require('gulp-clean-css'),
    gulpCopy       = require('gulp-copy')
    livereload     = require('gulp-livereload');


gulp.task('html', function() {
  //
});

gulp.task('javascript', function() {
  //

  gulp.src([
    './sources/javascript/main.js',
  ])
  .pipe(concat("main.js"))
  .pipe(uglify())
  .pipe(gulp.dest('./public/js/'))
  .pipe(livereload());

  gulp.src([
    './sources/javascript/jquery-3.2.1.js',
    './sources/javascript/bootstrap.js',
    './sources/javascript/pace.min.js',
    './sources/javascript/jquery.mask.min.js',
  ])
  .pipe(concat("vendor.js"))
  .pipe(uglify())
  .pipe(gulp.dest('./public/js/'))
  .pipe(livereload());
});

gulp.task('stylesheet', function() {
  //

  gulp.src([
   // Bloco 01.
   './sources/stylesheet/bootstrap.css',
   './sources/stylesheet/reset.min.css',
   './sources/stylesheet/pace.css',
   './sources/stylesheet/main.css',
 ])
 .pipe(concat("vendor.css"))
 .pipe(cleanCSS({compatibility: 'ie8'}))
 .pipe(gulp.dest('./public/css/'))
 .pipe(livereload());
});


gulp.task('watch', function() {
  livereload.listen({
    reloadPage: './',
    start: true,
  });
  gulp.watch('./sources/stylesheet/*.css', ['stylesheet']);
  gulp.watch('./sources/javascript/*.js', ['javascript']);
});


gulp.task('default', ['html', 'watch', 'stylesheet', 'javascript']);
