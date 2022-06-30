<?php
    register_nav_menus( array(
        'sidebar-menu' => 'サイドバーナビゲーション',
        'footer-menu'  => 'フッターナビゲーション',
     ));
    add_theme_support( 'title-tag');
    add_theme_support( 'post-thumbnails');
    add_theme_support( 'automatic-feed-links' );

    function hamburger_site_title( $title) {
        if(is_front_page() && is_home() ){
            $title = get_bloginfo( 'name','display' );
        } elseif(is_singular()){
            $title = single_post_title('',false );
        }
            return $title;
    }
    add_filter( 'pre_get_document_title', 'hamburger_site_title' );

    function hamburger_site_script(){
        wp_enqueue_style('ress', 'https://unpkg.com/ress/dist/ress.min.css',array(), false, 'all');
        wp_enqueue_style('style', get_template_directory_uri().'/css/style.css', array('ress'), false, 'all');
        wp_enqueue_style('mplus1p','https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap', array());
        wp_enqueue_style('Robot','https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@500;700&display=swap', array());
        wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery-3.6.0.min.js',array());
        wp_enqueue_script('sidebar', get_template_directory_uri().'/js/sidebar.js',array());
    }
    add_action('wp_enqueue_scripts','hamburger_site_script');

    function my_query( $query ) {
        if ( is_admin() || ! $query->is_main_query() ) {
          return;
        }
      
        if ( $query->is_archive() ) {
            $query->set( 'order', 'ASC' );
        }
    }
    add_action( 'pre_get_posts', 'my_query' );
