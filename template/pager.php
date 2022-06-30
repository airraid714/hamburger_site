<?php if(have_posts()): ?>
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
<?php else: ?>
<?php endif; ?>                              
