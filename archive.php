<?php get_header(); ?>

<?php get_sidebar(); ?>

<main class="l-main c-grid__main">
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

    <div class="p-item__wrapper">
    <div class="p-item__wrapper">
        <?php get_template_part('template/post'); ?>
        <?php get_template_part('template/pager'); ?>                             
    </div>
    </div>
</main>

<?php get_footer(); ?>