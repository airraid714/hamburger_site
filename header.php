<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <div class="c-container c-grid__layout">
            <header class="l-header c-grid__header">
                <div class="p-header">
                    <h1 class="c-title__site-title">
                        <a href="<?php echo esc_url( home_url('/')); ?>"><?php bloginfo('name'); ?></a>
                    </h1>
                    <div class="p-search__form">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/search_icon.png" class="p-search__icon">
                        <?php get_search_form(); ?>
                    </div>
                    <div class="c-button__header">
                        <button class="c-button__menu js-sideopen">Menu</button>
                    </div>
                </div>
            </header>
