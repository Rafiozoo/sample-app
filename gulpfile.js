var gulp         = require('gulp');
var sass         = require('gulp-sass');
var sourcemaps   = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');


gulp.task('copy', function() {
  gulp.src(['./src/AppBundle/Resources/assets/js/**/*'])
      .pipe(gulp.dest('./web/bundles/app/js'));
});


// Compile sass into CSS
gulp.task('sass', function () {
  return gulp.src('./src/AppBundle/Resources/assets/gfx/scss/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write())
    .pipe(autoprefixer())
    .pipe(gulp.dest('./web/bundles/app/css'));
});
