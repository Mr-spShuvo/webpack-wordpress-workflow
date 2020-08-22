<?php 
    // Webpack Chunk Cache Support
    function theme_enqueue_scripts(){
        $cssFilePath = glob(get_template_directory() . '/assets/css/app.min.*.css');
        $cssFileURI = get_template_directory_uri() . '/assets/css/' . basename($cssFilePath[0]);
        wp_enqueue_style('site_main_css', $cssFileURI);

        $jsFilePath = glob(get_template_directory() . '/assets/js/app.min.*.js');
        $jsFileURI = get_template_directory_uri() . '/assets/js/' . basename($jsFilePath[0]);
        wp_enqueue_script('site_main_js', $jsFileURI, null, null, true);

    }

    add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');