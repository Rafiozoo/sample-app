var gulp         = require('gulp');
var browserSync  = require('browser-sync').create();
var sass         = require('gulp-sass');
var sourcemaps   = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
// var runSequence  = require('run-sequence');


gulp.task('copy', function() {
  gulp.src(['./src/AppBundle/Resources/assets/js/**/*'])
      .pipe(gulp.dest('./web/bundles/app/js'));
});


// Static Server + watching scss/html files
gulp.task('serve', ['sass'], function() {

    browserSync.init({
        // proxy: "localhost:8080/sample-app/web/app_dev.php"
        proxy: 'localhost', // /web/app_dev.php/*
        port: 8000
    });

    gulp.watch('./src/AppBundle/Resources/assets/gfx/scss/*.scss', ['sass']);
    gulp.watch('./src/AppBundle/Resources/views/**/*.twig').on('change', browserSync.reload);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function () {
  return gulp.src('./src/AppBundle/Resources/assets/gfx/scss/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write())
    .pipe(autoprefixer())
    .pipe(gulp.dest('./web/bundles/app/css'))
    .pipe(browserSync.stream());
});

gulp.task('default', ['serve']);
