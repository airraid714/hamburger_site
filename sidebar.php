<aside class="l-sidebar p-sidebar c-grid__sidebar">
    <div class="p-sidebar__inner">
        <div class="c-inner__button--close">
            <button class="c-button__close js-sideclose">
            </button>
        </div>
        <div class="p-menu">
            <h2 class="c-title__sidebar">Menu</h2>
            <?php wp_nav_menu(array(
                'theme_location' => 'sidebar-menu',
            )); ?>
        </div>
    </div>
</aside>   

