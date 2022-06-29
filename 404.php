<?php get_header(); ?>

<?php get_sidebar(); ?>

<main class="l-main c-grid__main">
    <div class="p-page__inner-archive ">
        <div class="c-layer__img"></div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/404/not-found-2384304_1280.jpg">
        <div class="p-page__content ">
            <h2 class="p-page__title c-title__mainvisual">404エラー</h2> 
            <p class="c-title__item u-margin-left20">お探しのページがみつかりませんでした</p>
        </div>
    </div>
    <div class="p-item__wrapper">
        <div class="p-articles">
            <p class="c-text__articles">大変恐れ入りますが、管理者にお問い合わせください</p>
        </div>
    </div>
</main>

<?php get_footer(); ?>