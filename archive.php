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
                <ul class="p-item__list">        <!-------------フードのリスト--------->
                    <li class="p-item">
                        <?php the_post_thumbnail(); ?>
                        <div class="p-item__content">
                            <h3 class="c-title__item u-margin__bottom1"><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                            <div class="p-item__box">
                            <a href="<?php the_permalink(); ?>" class="p-item__link">詳しく見る</a>
                            </div>
                        </div>
                    </li>
                </ul>                            <!-------------フードのリスト--------->  
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
                'mid_size' => 6,
            )); ?>
            </div>                            <!-----------ページャー--------------->          
        <?php endwhile; ?> 
            <?php wp_reset_postdata(); ?>
        <?php else: ?>
            <div class="p-articles">
                <p class="c-text__articles">表示できるフードがありません</p>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>