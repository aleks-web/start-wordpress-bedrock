const mix = require('laravel-mix');

const site_local_domain = 'wp';
const theme_folder_name = 'test';
const theme_folder_path = 'web/app/themes/' + theme_folder_name;

mix
    .sass(theme_folder_path + '/assets/scss/style.scss', theme_folder_path + '/assets/css')
    .disableNotifications()
    .browserSync({
        proxy: site_local_domain,
        files: [
            theme_folder_path + '/assets/js/**/*',
            theme_folder_path + '/assets/css/**/*',
            theme_folder_path + '/assets/scss/**/*',
            theme_folder_path + '/**/*.+(html|php)'
        ],
        reloadOnRestart: true
    });