var gulp = require('gulp');
var browserSyncMod = require('browser-sync');
var browserSync = browserSyncMod.create();
var $ = require('gulp-load-plugins')();
var autoprefixer = require('autoprefixer');
var httpProxy = require('http-proxy');

var sassPaths = [
  'node_modules/foundation-sites/scss',
  'node_modules/motion-ui/src'
];

function sass() {
  return gulp.src('scss/app.scss')
    .pipe($.sass({
        includePaths: sassPaths,
        outputStyle: 'compressed' // if css compressed **file size**
      })
      .on('error', $.sass.logError))
    .pipe($.postcss([
      autoprefixer({
        browsers: ['last 2 versions', 'ie >= 9']
      })
    ]))
    .pipe(gulp.dest('css'));
};

function serve() {
  browserSync.init({
    server: "./"
  });

  gulp.watch("scss/*.scss", sass);
  gulp.watch("*.html").on('change', browserSync.reload);
}


gulp.task('servephp', function () {

  $.connectPhp.server({
    port: 3000,
    keepalive: true
  }, function () {
    browserSyncMod({
      proxy: '127.0.0.1:3000'
    });
  });
  gulp.watch("scss/*.scss", sass);
  gulp.watch('css/*.css').on('change', browserSyncMod.reload);
  gulp.watch('**/*.php').on('change', browserSyncMod.reload);

});

gulp.task('sass', sass);
gulp.task('serve', gulp.series('sass', serve));
gulp.task('default', gulp.series('sass', 'servephp'));