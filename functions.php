<?php
    function montheme_supports(){
        add_theme_support('title-tag');
        add_theme_support('menus');
        add_theme_support('custom-logo');
        register_nav_menu('navbar', 'En tête du menu');
        register_nav_menu('footer', 'Plan du site');
        register_nav_menu('bieres', 'Liste des Bières');
        register_nav_menu('social', 'Lien vers les reseaux');
    }

    function montheme_assets(){
        
    }

    /* Autoriser les fichiers SVG */
    function wpc_mime_types($mimes) {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }

    add_filter('upload_mimes', 'wpc_mime_types');
    add_action('after_setup_theme', 'montheme_supports');
    add_action('wp_enqueue_scripts','montheme_assets');
?>