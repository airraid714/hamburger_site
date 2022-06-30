<?php get_header(); ?>

<?php get_sidebar(); ?>

<main class="l-main c-grid__main">
    <div class="p-page__inner-archive ">
        <div class="c-layer__img"></div>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/Archive/mainvisual2.jpg">
        <div class="p-page__content">
            <h2 class="p-page__title c-title__mainvisual">Search</h2> 
            <?php
                if (isset($_GET['s']) && empty($_GET['s'])) {
                    echo '';                                                              //検索ワードが空白の場合はなにも表示されない
                } else {
                    echo '<p class="c-title__item u-margin-left20">'.$_GET['s'].'</p>' ;  //検索ワードが画像の上に表示される
                }
            ?>
        </div>
    </div>
    <div class="p-articles">
        <?php if (have_posts()): ?>
        <?php
        if (isset($_GET['s']) && empty($_GET['s'])) {
            
            echo '<h2 class="c-title__articles-h2 u-margin__archive-title">すべてのフードを表示します</h2>'; // 検索キーワードが未入力の場合のテキストを指定
        } else {
            echo '<h2 class="c-title__articles-h2 u-margin__archive-title">
            “'.$_GET['s'] .'”に一致するメニューは'.$wp_query->found_posts .'件ございます</h2>'; // 検索キーワードと該当件数を表示
        }
        ?>
        <?php else: ?>
            <h2 class="c-title__articles-h2 u-margin__archive-title">検索結果、該当なし</h2>
            <p class="c-text__articles">
                検索のヒント：<br>
                ・キーワードに誤字・脱字がないか確認しましょう。<br>
                ・メニュー名（例：ハンバーガー）カテゴリー名（例：ドリンク）に変えてみましょう。
        <?php endif; ?>
    </div>
    
    <div class="p-item__wrapper">
        <?php get_template_part('template/post'); ?>
        <?php get_template_part('template/pager'); ?>                             
    </div>
</main>

<?php get_footer(); ?>