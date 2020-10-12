<?php 

function javascriptU_files() {
    wp_enqueue_script('mainJSscript', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
    wp_enqueue_style('googleFontSheet', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('fontAwesomeSheet', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('mainStylesheet', get_stylesheet_uri());
    // duplicate line here to make another stylesheet load, change to script to load js
}

add_action('wp_enqueue_scripts', 'javascriptU_files');

?>