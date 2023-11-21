// Defining base pathes
var basePaths = {
    node: './node_modules/',
    src: './src/',
    assets: './assets/',
    vendorsCss: './src/vendors/css/',
    vendorsJs: './src/vendors/js/'
};

var jsFileList = [
    basePaths.vendorsJs + '*.js',
    basePaths.src + 'js/custom-script.js'
];

var cssFileList = [
    basePaths.vendorsCss + '*.css'
];


// console.log(jsFileList);

// Defining requirements
var gulp = require('gulp');
var plumber = require('gulp-plumber');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
var minifyCSS = require('gulp-cssnano');
var rename = require('gulp-rename');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var merge2 = require('merge2');
var ignore = require('gulp-ignore');
var del = require('del');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var csscomb = require('gulp-csscomb');
var imagemin = require('gulp-imagemin');
var browserSync = require('browser-sync').create();


// browser-sync watched files
// automatically reloads the page when files changed
var browserSyncWatchFiles = [
    basePaths.assets + 'css/*.css',
    basePaths.assets + 'js/*.js',
    basePaths.src + 'media/**',
    './*.html',
    './*.php'
];

var browserSyncOptions = {
    proxy: "http://localhost/GSL/sblog.com/",
    notify: false
};

// Run:
// gulp browser-sync
// Starts browser-sync task for starting the server.
gulp.task('browser-sync', function () {
    browserSync.init(browserSyncWatchFiles, browserSyncOptions);
});

// Run:
// gulp sass
// Compiles SCSS files in CSS
gulp.task('sass', function () {
    return gulp.src(basePaths.src + 'sass/*.scss')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(sourcemaps.init({loadMaps: true}))
        .pipe(sourcemaps.write('.'))
        // .pipe(csscomb())
        .pipe(gulp.dest(basePaths.assets + 'css'))
        .pipe(browserSync.stream());
});


// Run:
// gulp concat-css
// concat css file from src
gulp.task('concat-css', function () {
    return gulp.src(cssFileList)
        .pipe(plumber())
        .pipe(concat('bundle.css'))
        .pipe(gulp.dest(basePaths.assets + 'css/'))
        .pipe(browserSync.stream());
});

// Run:
// gulp concat-js
// concat js file from src
gulp.task('concat-js', function () {
    return gulp.src(jsFileList)
        .pipe(plumber())
        .pipe(concat('bundle.js'))
        .pipe(gulp.dest(basePaths.assets + 'js/'))
        .pipe(browserSync.stream());
});


// Run:
// gulp minifycss
// Minifies CSS files
gulp.task('minifycss', function () {
    return gulp.src([basePaths.assets + 'css/bundle.css', basePaths.assets + 'css/theme.css'])
        .pipe(plumber())
        .pipe(concat('theme.min.css'))
        .pipe(minifyCSS({keepBreaks: false, safe: true}))
        .pipe(minifyCSS({
                reduceIdents: {
                    keyframes: false
                },
                discardUnused: {
                    keyframes: false
                },
                discardComments: {
                    removeAll: true
                }
            }
        ))
        .pipe(gulp.dest(basePaths.assets + 'css/'));
});

// Run:
// gulp minifyjs
// Minifies js files
gulp.task('minifyjs', function () {
    return gulp.src(basePaths.assets + 'js/bundle.js')
        .pipe(plumber())
        // .pipe(concat('bundle.min.js'))
        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .pipe(gulp.dest(basePaths.assets + 'js/'));
});


// Run:
// gulp clean
// Remove file
gulp.task('clean', function () {
    return del([
        'css/*',
        // here we use a globbing pattern to match everything inside the `mobile` folder
        'js/*.js',
        // we don't want to clean this file though so we negate the pattern
        '!css/*.min.css',
        '!js/*.min.js'
    ]);
});


// Run:
// gulp imagemin
// Running image optimizing task
gulp.task('imagemin', function () {
    return gulp.src(basePaths.src + 'img/**')
        .pipe(imagemin())
        .pipe(gulp.dest(basePaths.assets + 'img/'));
});


// Run:
// gulp watch
// Starts watcher. Watcher runs gulp sass task on changes
gulp.task('watch', function (done) {
    gulp.watch(basePaths.src + 'sass/**/*.scss', gulp.series('sass'));
    gulp.watch(cssFileList, gulp.series('concat-css'));
    gulp.watch(jsFileList, gulp.series('concat-js'));
    gulp.watch(basePaths.src + 'img/**', gulp.series('imagemin'));
    //gulp.watch('browser-sync');
    done();
});


//task register
gulp.task('default', gulp.series('watch', 'sass', 'concat-css', 'concat-js', 'browser-sync'));
gulp.task('build', gulp.series('sass', 'concat-css', 'concat-js', 'minifycss', 'minifyjs', 'imagemin'));