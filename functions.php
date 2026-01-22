<?php

// Charger les styles parent + enfant
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );

    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(),
        ['parent-style'],
        wp_get_theme()->get('Version')
    );
});

// Forcer le favicon pour Google (SERP)
add_action('wp_head', function () {
    ?>
    <link rel="icon" href="https://www.cryptonomic.fr/wp-content/uploads/2026/01/favicon.png" sizes="512x512" type="image/png">
    <?php
});
