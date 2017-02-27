var gulp = require('gulp'),
    gulpLoadPlugins = require('gulp-load-plugins'),
    plugins = gulpLoadPlugins();
 
var cnUrl = [
	[ 'main.css', 'http://anyway-web.b0.upaiyun.com/analytttics/main.min.css' ],
	[ 'build/all.js', 'http://anyway-web.b0.upaiyun.com/analytttics/all.js' ]
];


 
gulp.task('watch', function() {
	gulp.watch(['*','*/*'], ['default']);
 });
 
 
gulp.task('default', function() {

	gulp.src('index.php')
		.pipe(plugins.htmlmin({collapseWhitespace: true}))
		.pipe(gulp.dest('build'));
	
	gulp.src('index-cn.php')
		.pipe(plugins.batchReplace(cnUrl))
		.pipe(plugins.htmlmin({collapseWhitespace: true}))
		.pipe(gulp.dest('build'));
		
	gulp.src(['js/*.js','!js/d3.min.js'])
		.pipe(plugins.uglify())
		.pipe(plugins.concat('all.js'))
		.pipe(gulp.dest('build'));
		
	gulp.src('main.css')
		.pipe(plugins.cleanCss({compatibility: 'ie8'}))
		.pipe(plugins.rename({
		      suffix: '.min'
		    }))
		.pipe(gulp.dest('build'));     
});

