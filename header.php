<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head() ?>
</head>

<body>
    <nav id='navigation'>
        <?php if(has_custom_logo()) : ?>
            <?php the_custom_logo(); ?>
        <?php else : ?>
            <!--<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>-->
        <?php endif; ?>
        <?php
            wp_nav_menu(['theme_location' => 'navbar']);
        ?>
    </nav>
    <div class="container">