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
