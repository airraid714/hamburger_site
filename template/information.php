<div class="p-section__inner p-section__background1">   <!-----  Take Out の投稿が入る  --->
    <h2 class="p-section__title p-section__color1">Take Out</h2>    
    <div class="c-inner__contents">
        <?php
            $arg = array('category_name' => 'take-out' ); //指定したいカテゴリーのスラッグをを入れる
            $posts = get_posts( $arg );
            if( $posts ): ?>
            <?php
                foreach ( $posts as $post ) :
                    setup_postdata( $post ); ?>
                        <dl class="p-section__list">
                            <dt class="c-title__contents"><?php the_title(); ?></dt>
                            <dd class="c-text__contents"><?php the_content(); ?></dd>                                
                        </dl>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
            <?php else: ?>                   <!---投稿がない場合--->
                <dl class="p-section__list">    
                    <dd class="c-text__contents">表示できる記事がありません</dd>                                
                </dl>
            <?endif;
        ?>            
    </div>
</div>
<div class="p-section__inner p-section__background2">   <!-----  Eat In の投稿が入る  --->
    <h2 class="p-section__title p-section__color2">Eat In</h2> 
    <div class="c-inner__contents">
        <?php
            $arg = array(
                        'category_name' => 'eat-in' 
                    );
            $posts = get_posts( $arg );
            if( $posts ): ?>
                <ul>
            <?php
                foreach ( $posts as $post ) :
                    setup_postdata( $post ); ?>
                        <dl class="p-section__list">
                            <dt class="c-title__contents"><?php the_title(); ?></dt>
                            <dd class="c-text__contents"><?php the_content(); ?></dd>                                
                        </dl>
            <?php endforeach; ?>
                </ul>
            <?php
            endif;
            wp_reset_postdata();
        ?>            
    </div>

</div>
