var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')

        .styles([

            'bootstrap.min.css',
            'font-awesome.css',
            'ionicons.css',
            'plugins/sidebar-menu.css',
            'plugins/animate.css',
            'jquery-ui.css',
            'plugins/colorbox.css',
            'plugins/flexslider.css',
            'plugins/jquery.fs.tipper.css',
            'plugins/jquery.fullPage.css',
            'plugins/mediaelementplayer.css',
            'plugins/owl.carousel.css',
            'plugins/smoothproducts.css',
            'plugins/YTPlayer.css'

        ], 'public/css/vendors.css')

        .styles([

            'admin/vendor/bootstrap/css/bootstrap.min.css',
            'admin/vendor/metisMenu/metisMenu.min.css',
            'admin/dist/css/sb-admin-2.min.css',
            'admin/vendor/morrisjs/morris.css',
            'admin/vendor/font-awesome/css/font-awesome.min.css'

        ], 'public/css/admin/vendors.css')

        .scripts([

            'jquery-1.11.2.min.js',
            'plugins/jquery.easing.js',
            'jquery-ui.min.js',
            'bootstrap.min.js',
            'plugins/jquery.flexslider.js',
            'plugins/jquery.fitvids.js',
            'plugins/jquery.viewportchecker.js',
            'plugins/jquery.stellar.min.js',
            'plugins/wow.min.js',
            'plugins/jquery.colorbox-min.js',
            'plugins/owl.carousel.min.js',
            'plugins/isotope.pkgd.min.js',
            'plugins/masonry.pkgd.min.js',
            'plugins/imagesloaded.pkgd.min.js',
            'plugins/jquery.fs.tipper.min.js',
            'plugins/mediaelement-and-player.min.js',
            'plugins/sidebar-menu.js',
            'theme.js',
            'navigation.js'

        ], 'public/js/vendors.js')

        .scripts([

            'admin/vendor/jquery/jquery.min.js',
            'admin/vendor/bootstrap/js/bootstrap.min.js',
            'admin/vendor/metisMenu/metisMenu.min.js',
            'admin/vendor/raphael/raphael.min.js',
            'admin/vendor/morrisjs/morris.min.js',
            'admin/data/morris-data.js',
            'admin/dist/js/sb-admin-2.js',
            'admin/vendor/bootstrap/js/validator.min.js'

        ], 'public/js/admin/vendors.js');

});
