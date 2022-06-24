<?php get_header(); ?>

<?php get_sidebar(); ?>

<main class="l-main c-grid__main">
    <div class="p-page__wrapper">
        <div class="p-page__inner-archive ">
            <div class="c-layer__img"></div>
            <?php       
                $category = get_the_category();
                $category = $category[0];
            ?>
            <?php if (function_exists('z_taxonomy_image')) z_taxonomy_image(); ?>           
            <div class="p-page__content">
                <h2 class="p-page__title c-title__mainvisual">Menu</h2> 
                <p class="c-title__item u-margin-left20">
                    <?php echo $category->name; ?>
                </p>
            </div>
        </div>
        <div class="p-articles">
            <h2 class="c-title__articles-h2 u-margin__archive-title"><?php echo $category->name; ?></h2>
            <p class="c-text__articles"><?php echo $category->description; ?></p>            
        </div>
    </div>
    <div class="p-item__wrapper">
        <?php if(have_posts()): ?>
        <?php while(have_posts()):
                the_post(); ?>
                <ul class="p-item__list">
                    <li class="p-item">
                        <?php the_post_thumbnail(); ?>
                        <div class="p-item__content">
                            <h3 class="c-title__item u-margin__bottom1"><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                            <div class="p-item__box">
                            <a href="#" class="p-item__link">詳しく見る</a>
                            </div>
                        </div>
                    </li>
                </ul>
            <?php endwhile; ?> 
            <?php wp_reset_postdata(); ?>
        <?php else: ?>
            <p>表示できるフードがありません</p>
        <?php endif; ?>
        <div class="p-page__pagination"> <!-----------ページャー--------------->
            <div class="p-page_count">
                <p class="c-text__pager u-breakpoint__sm">page</p>
                <div class="p-page__viewer">
                    <?php 
                        // 現在のページ番号を取得して表示
                        $current_page = get_query_var( 'paged' ); 
                        $current_page = $current_page == 0 ? '1' : $current_page;
                        echo  '<p class="c-text__pager u-breakpoint__sm">'.$current_page.'</p>';
                    ?>
                    <p class="c-text__pager u-breakpoint__sm">/</p>
                    <?php
                        // 全ページ数を取得して表示
                        $max_pages = $wp_query->max_num_pages;
                        echo '<p class="c-text__pager u-breakpoint__sm">'.$max_pages.'</p>';
                    ?>
                 </div>
            </div>
            <?php the_posts_pagination(array(
                'prev_text' => '&lt;&lt;',
                'next_text' => '&gt;&gt;',
                'mid_size' => 6,
            )); ?>
        </div>                            <!-----------ページャー---------------> 
        <div class="p-page__pager">
            <p class="c-text__pager u-breakpoint__sm">page 1/10</p>
            <a href="#" class="p-page__link">
                <img src="img/button_icon-back.png" class="c-icon">
                <p class="c-text__pager u-breakpoint__tab">前へ</p>
            </a>
            <ul class="p-page__list ">
                <li class="p-page__item"><a href="#" class="p-page__number is-nowpage">1</a></li>
                <li class="p-page__item"><a href="#" class="p-page__number">2</a></li>
                <li class="p-page__item"><a href="#" class="p-page__number">3</a></li>
                <li class="p-page__item"><a href="#" class="p-page__number">4</a></li>
                <li class="p-page__item"><a href="#" class="p-page__number">5</a></li>
                <li class="p-page__item"><a href="#" class="p-page__number">6</a></li>
                <li class="p-page__item"><a href="#" class="p-page__number">7</a></li>
                <li class="p-page__item"><a href="#" class="p-page__number">8</a></li>
                <li class="p-page__item"><a href="#" class="p-page__number">9</a></li>
            </ul>
           
            <a href="#" class="p-page__link">
                <p class="c-text__pager u-breakpoint__tab">次へ</p>
                <img src="img/button_icon-go.png" class="c-icon">
            </a>
        </div>
         
    </div>
</main>

<?php get_footer(); ?>