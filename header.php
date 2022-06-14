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
                    <div class="p-search__inner">
                        <from action="" class="p-search__form">
                            <div class="p-search__wrapper">
                                <img src="img\search_icon.png" class="p-search__icon">
                                <input type="search" name="search" class="p-search__text">
                            </div>
                            <input type="submit" name="submit" value="検索" class="p-search__button">
                        </from>
                    </div>
                    <div class="c-button__header">
                        <button class="c-button__menu js-sideopen">Menu</button>
                    </div>
                </div>
            </header>
