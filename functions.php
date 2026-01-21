<?php
add_action( 'wp_enqueue_scripts', function() {

    // CSS du parent réel
    wp_enqueue_style(
        'bloglo-style',
        get_template_directory_uri() . '/style.css'
    );

    // CSS du thème actuel remplacé (Blogvi)
    wp_enqueue_style(
        'blogvi-style',
        get_stylesheet_directory_uri() . '/../blogvi/style.css',
        ['bloglo-style']
    );

    // CSS du thème enfant
    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(),
        ['blogvi-style'],
        wp_get_theme()->get('Version')
    );

});
