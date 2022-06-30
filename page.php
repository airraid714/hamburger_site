<?php get_header(); ?>
<?php get_sidebar(); ?>

<main class="l-main c-grid__main">
    <?php if(have_posts()): ?>
    <?php while(have_posts()):
        the_post(); ?>
            <div class="p-page__inner-archive ">
                <div class="c-layer__img"></div>
                <?php the_post_thumbnail(); ?>
                <div class="p-page__content">
                    <h2 class="c-title__mainvisual"><?php the_title(); ?></h2> 
                </div>
            </div>

            <div class="p-page__wrapper">
                <?php the_content(); ?>
            </div>
    <?php endwhile; ?> 
        <?php wp_reset_postdata(); ?>
    <?php else: ?>
        <p>表示できるページがありません</p>
    <?php endif; ?>                
</main>
<?php get_footer(); ?>