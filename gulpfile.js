const gulp       = require( 'gulp' );
var sass         = require( 'gulp-sass' );
var postcss      = require( 'gulp-postcss' );
var stylelint    = require( 'gulp-stylelint' );
var autoprefixer = require( 'autoprefixer' );
var livereload   = require( 'gulp-livereload' );

function css() {
	var processors = [
		autoprefixer( { browsers: ['last 2 versions'] } )
	];

	return gulp.src( './sass/style.scss' )
		.pipe( sass().on( 'error', sass.logError ) )
		.pipe( postcss( processors ) )
		.pipe( gulp.dest( './' ) )
		.pipe( livereload() );
}

function lint() {
	return gulp.src( './sass/**/*.scss' )
		.pipe( stylelint( {
			reporters: [ {
				formatter: 'string',
				console: true
			} ]
		} ) )
}

function html() {
    // todo make reload for php changes too
	return gulp.src( './template-parts/**/*.html' )
		.pipe( livereload() );
}

function watch() {
	livereload.listen();
	gulp.watch( 'sass/**/*.scss', gulp.series( css ) ); // todo add lint back and fix it from breaking the watch
	gulp.watch( 'template-parts/**/*.html', gulp.series( html ) );
}

exports.css     = css;
exports.lint    = lint;
exports.default = gulp.series( css, html, watch );    // todo add lint back and fix it from breaking the watch
