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
        <?php if(have_posts()): ?>
        <?php while(have_posts()):
            the_post(); ?>
            <ul class="p-item__list" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <li class="p-item">
                    <?php the_post_thumbnail(); ?>
                    <div class="p-item__content">
                        <h3 class="c-title__item u-margin__bottom1"><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                        <div class="p-item__box">
                        <a href="<?php the_permalink(); ?>" class="p-item__link">詳しく見る</a>
                        </div>
                    </div>
                </li>
            </ul>
        <?php endwhile; ?> 
        <?php wp_reset_postdata(); ?>
        <?php else: ?>
            <div class="p-articles">
                <p class="c-text__articles">表示できるページがありません</p>
            </div>
        <?php endif; ?>
        <div class="p-page__pagination"> <!-----------ページャー--------------->
            <div class="p-page_count">
                <p class="c-text__pager">page</p>
                <div class="p-page__viewer">
                    <?php 
                        // 現在のページ番号を取得して表示
                        $current_page = get_query_var( 'paged' ); 
                        $current_page = $current_page == 0 ? '1' : $current_page;
                        echo  '<p class="c-text__pager">'.$current_page.'</p>';
                    ?>
                    <p class="c-text__pager">/</p>
                    <?php
                        // 全ページ数を取得して表示
                        $max_pages = $wp_query->max_num_pages;
                        echo '<p class="c-text__pager">'.$max_pages.'</p>';
                    ?>
                </div>
            </div>
            <?php the_posts_pagination(array(
                'prev_text' => '&lt;&lt;',
                'next_text' => '&gt;&gt;',
                'mid_size' => 5,
            )); ?>
            <?php wp_link_pages(); ?>
        </div>                              <!-----------ページャー--------------->
    </div>
</main>

<?php get_footer(); ?>