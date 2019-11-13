const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js/').sass('resources/sass/app.scss', 'public/css');


/*mix.js([
		'node_modules/admin-lte/bower_components/jquery/dist/jquery.min.js',
		'node_modules/admin-lte/bower_components/jquery-ui/jquery-ui.min.js',
		'node_modules/admin-lte/bower_components/bootstrap/dist/js/bootstrap.min.js',
		'node_modules/admin-lte/bower_components/fastclick/lib/fastclick.js',
		'node_modules/admin-lte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js',
		'node_modules/admin-lte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js',
		'node_modules/admin-lte/dist/js/adminlte.min.js',
		'node_modules/admin-lte/dist/js/demo.js',

	], 'public/backend/js/admin.js')
   .styles([
   		'publci/backend/bower_components/bootstrap/dist/css/bootstrap.min.css',
   		'public/backend/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
   		'public/backend/bower_components/font-awesome/css/font-awesome.min.css',
   		'public/backend/bower_components/Ionicons/css/ionicons.min.css',
   		'public/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
   		'public/backend/dist/css/AdminLTE.min.css',
   		'public/backend/dist/css/skins/_all-skins.min.css',
   		'public/backend/dist/css/skins/skin-purple.css',
   		'public/backend/dist/css/skins/skin-green.min.css',
   		'public/backend/dist/css/skins/skin-yellow.min.css',
   		'public/backend/dist/css/skins/skin-blue.min.css',

   	], 'public/backend/css/admin.css');*/
