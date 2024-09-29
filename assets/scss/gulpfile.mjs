import gulp from "gulp";
import imagemin from "imagemin";
import imageminJpegtran from "imagemin-jpegtran";
import imageminPngquant from "imagemin-pngquant";
import imageminSvgo from "imagemin-svgo";
import uglify from "gulp-uglify";
import rename from "gulp-rename";

const paths = {
	images: "../downloaded-images/*.{jpg,png,svg}",
	icons: "../downloaded-images/icons/*.svg",
	js: "../js/*.js",
	output: "../images",
	outputIcons: "../images/icons",
};

// Define the image optimization task for JPEG and PNG
gulp.task("minifyImages", async () => {
	const files = await imagemin([paths.images], {
		destination: paths.output,
		plugins: [
			imageminJpegtran(),
			imageminPngquant({
				quality: [0.6, 0.8],
			}),
		],
	});
	console.log("Optimized images:", files);
});

// Define the SVG optimization task
gulp.task("minifyIcons", async () => {
	const files = await imagemin([paths.icons], {
		destination: paths.outputIcons,
		plugins: [imageminSvgo()],
	});
	console.log("Optimized SVGs:", files);
});

// Define the JavaScript minification task
gulp.task("minifyJs", () => {
	return gulp
		.src([paths.js, "!../js/*.min.js"]) // Exclude already minified files
		.pipe(uglify())
		.pipe(rename({ suffix: ".min" }))
		.pipe(gulp.dest("../js")); // Save in the same directory
});

// Watch for file changes and re-run the tasks
gulp.task("watch", () => {
	gulp.watch(paths.images, gulp.series("minifyImages"));
	gulp.watch(paths.icons, gulp.series("minifyIcons"));
	gulp.watch(paths.js, gulp.series("minifyJs"));
});

// Default task to run both optimizations and JS minification
gulp.task(
	"default",
	gulp.series("minifyImages", "minifyIcons", "minifyJs", "watch"),
);
