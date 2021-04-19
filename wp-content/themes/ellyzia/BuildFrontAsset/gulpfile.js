const { series, parallel, src, dest, watch } = require('gulp')
/*
* CSS styles
*
*/
const gulp = require('gulp')
const autoprefixer = require('gulp-autoprefixer')
const stylus = require('gulp-stylus')
const concat = require('gulp-concat')
const cssnano = require('gulp-cssnano')
const postcss = require("gulp-postcss");
const tailwindcss = require("tailwindcss");
/*
* Javascript
*
*/
const uglifyEs = require('gulp-uglify-es').default
/*
* Images
*
*/
const imagemin = require('gulp-imagemin')
const webp = require('imagemin-webp')
const pngquant = require('imagemin-pngquant')
const imagesConvert = require('gulp-images-convert')
const rename = require('gulp-rename')
/*
* Fonts
*
*/
const iconfont = require('gulp-iconfont')
const iconfontCss = require('gulp-iconfont-css')
/*
* Tools
*
*/
const extReplace = require('gulp-ext-replace')
const del = require('del')
const purgecss = require("@fullhuman/postcss-purgecss");

/*
* Const Path
*
*/
const filePath = {
  dist_dir: './dist',
  dist: {
    cssOutput: `./dist/css`,
    jsOutput: `./dist/js`,
    imageOutput: `./dist/images`,
    fontsOutput: `./dist/fonts`,
  },
  src : {
    js: [
      './assets/js/*.js'
    ],
    stylMain: `./assets/stylus/style.styl`,
    style: [
      `./assets/stylus/*.styl`,
    ],
    images: `./assets/images/*.*`
  },
  shared: {
    stylMain: './assets/stylus/main-shared.styl'
  }
}

/*
* Function
*
*/
function tailWindToCss() {
  return gulp.src('./assets/stylus/tailwind.css')
  .pipe(postcss([
    require('tailwindcss'),
    require('autoprefixer'),
    purgecss({
      content: [
        '../hooks-end/**/**/*.php',
        '../hooks-end/**/*.php',
        '../*',
      ],
      defaultExtractor: content =>
        content.match(/[\w-/:]+(?<!:)/g) || []
    })
  ]))
    .pipe(dest(filePath.dist.cssOutput))
}

function stylusToCss() {
  return gulp.src('./assets/stylus/main.styl')
  .pipe(stylus({
    'include css': true
  }))
    .pipe(stylus({ compress: false }))
    .pipe(concat('main.min.css'))
    .pipe(autoprefixer())
    .pipe(cssnano())
    .pipe(gulp.dest(filePath.dist.cssOutput))
}

function addCssInDist() {
  return src([
    './dist/css/icons.css',
    './dist/css/tailwind.css',
    './dist/css/main.min.css',
  ])
    .pipe(cssnano())
    .pipe(concat('main.min.css'))
    .pipe(dest(filePath.dist.cssOutput))
}

////////////////////////////////////
// Begin JAVASCRIPT Script Tasks ///
////////////////////////////////////

function uglify() {
  const options = {
    mangle: true
  }
  return src(filePath.src.js)
    .pipe(uglifyEs(options))
    .pipe(concat('main.min.js'))
    .pipe(dest(filePath.dist.jsOutput))
}

//////////////////////////////////
//             Font            ///
//////////////////////////////////

function fontIndist() {
  return src('./assets/fonts/**/*')
      .pipe(dest(filePath.dist.fontsOutput));
}

///////////////////////////////
//   Images optimisation   ////
///////////////////////////////

function convertJpegToPng() {
  return src('src-shared/assets/images/*.jpg')
    .pipe(imagesConvert({ targetType: 'png' }))
    .pipe(rename({ extname: '.png' }))
    .pipe(dest(filePath.dist.imageOutput))
}

function imagesConvertToWebP() {
  return src('./assets/images/*.{png,jpg,jpeg}')
    .pipe(
      imagemin([
        webp({
          quality: 75
        })
      ])
    )
    .pipe(extReplace('.webp'))
    .pipe(dest(filePath.dist.imageOutput))
}

function imagesOptimPng() {
  return src('./assets/images/*.{png,jpg,gif,svg}')
    .pipe(
      imagemin({
        progressive: true,
        verbose: true,
        use: [
          pngquant({
            quality: [0.6, 0.7]
          })
        ]
      })
    )
    .pipe(dest(filePath.dist.imageOutput))
}

// Used for dev
function copyImages() {
  return src('./assets/images/*.{png,jpg,gif,svg}').pipe(
    dest(filePath.dist.imageOutput)
  )
}

////////////////////////////////
//        ICONS FONT       ////
///////////////////////////////
// Create css for icons font ant then create ico font files
const fontName = 'icons'
function icofont() {
  return src('./assets/icons/*.svg') //'./assets/images/*.{png,jpg,jpeg}'
    .pipe(
      iconfontCss({
        fontName: fontName.toLowerCase(),
        targetPath: '../css/icons.css',
        fontPath: '../fonts/'
      })
    )
    .pipe(
      iconfont({
        fontName: fontName,
        formats: ['ttf', 'eot', 'woff', 'woff2'],
        appendCodepoints: true,
        prependUnicode: true,
        normalize: true,
        fontHeight: 1000,
        centerHorizontally: true,
        timestamp: Math.round(Date.now() / 1000)
      })
    )
    .pipe(dest(filePath.dist.fontsOutput))
}

//////////////////////////////////
//          UTILITIES         ////
//////////////////////////////////

function cleanDist() {
  return del(filePath.dist_dir)
}

function watchers() {

  // WATCH PHP
  watch(["../**/**/**/*.php","../**/**/*.php","../**/*.php","../*.php"]).on('change', function(path, stats) {
    console.log('\x1b[33m%s\x1b[0m', `File ${path} was changed`) // '\x1b[33m%s\x1b[0m' = couleur dans le terminal
  })

  watch(["../**/**/**/*.php","../**/**/*.php","../**/*.php","../*.php"],
    series(
      tailWindToCss,
      addCssInDist,
      function(done) {
        console.log('\x1b[32m%s\x1b[0m', 'watcher PHP task done')
        done()
      }
    )
  )

  // WATCH STYLES
  watch(`./assets/stylus/*.styl`).on('change', function(path, stats) {
    console.log('\x1b[33m%s\x1b[0m', `File ${path} was changed`) // '\x1b[33m%s\x1b[0m' = couleur dans le terminal
  })

  watch('./assets/stylus/*.styl',
    series(
      stylusToCss,
      tailWindToCss,
      addCssInDist,
      function(done) {
        console.log('\x1b[32m%s\x1b[0m', 'watcher STYLES task done')
        done()
      }
    )
  )

  // WATCH JS
  watch(`./assets/js/*.js`).on('change', function(path, stats) {
    console.log('\x1b[33m%s\x1b[0m', `File ${path} was changed`) // '\x1b[33m%s\x1b[0m' = couleur dans le terminal
  })

  watch('./assets/js/*.js',
    series(
      parallel(
        uglify
      ),
      function(done) {
        console.log('\x1b[32m%s\x1b[0m', 'watcher STYLES task done')
        done()
      }
    )
  )
}

//////////////////////////////////
//         TASKS Runner       ////
//////////////////////////////////

exports.build = series(
  cleanDist,
  tailWindToCss,
  icofont,
  parallel(
    stylusToCss,
    uglify,
    convertJpegToPng,
    fontIndist
  ),
  // renameCssClasses,
  addCssInDist,
  imagesConvertToWebP,
  imagesOptimPng
)

exports.watch = series(watchers)
