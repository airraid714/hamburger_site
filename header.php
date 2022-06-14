<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="uft-8">
        <title>ハンバーガーサイト</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=BioRhyme&family=M+PLUS+Rounded+1c&family=Roboto:wght@700&display=swap" rel="stylesheet">        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=BioRhyme&family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
    </head>
    <body>
        <div class="c-container c-grid__layout">
            <header class="l-header c-grid__header">
                <div class="c-inner p-header">
                    <h1 class="c-tittle__site-tittle">
                        <a href="<?php echo esc_url( home_url('/')); ?>"><?php bloginfo( 'name'); ?>
                    </h1>
                    <?php get_search_form(); ?>
                    <div class="c-button__header">
                        <button class="c-button__menu js-sideopen">Menu</button>
                    </div>
                </div>
            </header>
