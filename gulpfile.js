// Require the modules.
var gulp = require('gulp');
var gutil = require('gulp-util');
var minimist = require('minimist');
var config = require('./public/assets/dasboard_layout/config.json');

var options = minimist(process.argv.slice(2));

// Global Variables
global.config = config;

gutil.log(gutil.colors.green('Starting Gulp!!'));

const autoPrefixTasks = require('./public/gulp-tasks/autoprefix')(gulp);
const cleanTasks = require('./public/gulp-tasks/clean')(gulp);
const copyTask = require('./public/gulp-tasks/copy')(gulp);
const cssTasks = require('./public/gulp-tasks/css')(gulp);
const fileWriteTasks = require('./public/gulp-tasks/file-write')(gulp);
const replaceTasks = require('./public/gulp-tasks/replace')(gulp);
const scssTasks = require('./public/gulp-tasks/scss')(gulp);
const uglifyTasks = require('./public/gulp-tasks/uglify')(gulp);
const notifyTasks = require('./public/gulp-tasks/notify')(gulp);
const vendorsTasks = require('./public/gulp-tasks/vendors')(gulp);

// Create Vendors files
gulp.task('dist-vendor-js', vendorsTasks.js);
gulp.task('dist-vendor-css', gulp.series(vendorsTasks.css, cleanTasks.css_rtl_vendor, cssTasks.css_rtl_vendor));

// Clean CSS & JS
gulp.task('dist-clean', cleanTasks.css, cleanTasks.js);

// Monitor Changes
gulp.task('monitor', gulp.series(gulp.parallel(scssTasks.watch)));
// Dist JS
gulp.task('dist-js', gulp.series(cleanTasks.js, copyTask.js, uglifyTasks.js, notifyTasks.js));

// SASS Compile
gulp.task(
  'sass-compile',
  gulp.parallel(scssTasks.main, scssTasks.core, scssTasks.pages, scssTasks.plugins, scssTasks.themes, scssTasks.style)
);
// SASS Compile RTL
gulp.task('sass-compile-rtl', scssTasks.rtl);

// CSS Distribution Task.
gulp.task(
  'dist-css',
  gulp.series(
    cleanTasks.css,
    'sass-compile',
    autoPrefixTasks.css,
    cssTasks.css_comb,
    cssTasks.css_min,
    gulp.parallel(notifyTasks.css)
  )
);

// RTL CSS Distribution Task.
gulp.task(
  'dist-css-rtl',
  gulp.series(
    cleanTasks.css_rtl,
    'sass-compile',
    'sass-compile-rtl',
    cssTasks.css_rtl,
    autoPrefixTasks.css_rtl,
    cssTasks.css_rtl_comb,
    cssTasks.css_rtl_min
  )
);

// DEFAULT
gulp.task('dist', gulp.parallel('dist-css', 'dist-js'));

gulp.task('default', gulp.parallel('dist-css', 'dist-js'));

// Replacement Tasks
gulp.task('replacement', gulp.series(replaceTasks.css, replaceTasks.js));
