<article class="SingleItem">
    <div class="SingleHeader">
        <?php the_title('<h1 class="SingleTitle">','</h1>'); ?>
        <div class="SingleHeaderInfo">
            <span class="SingleAutor SinglePostInfo"><h5>
                <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
                    <?php the_author();?>
                </a></h5></span>
            <span class="SingleDate SinglePostInfo"><h5><?php echo get_the_date('M d, Y'); ?></h5></span>
            <span class="SingleComments SinglePostInfo"><h5><a href="<?=comments_link();?>"><?php echo get_comments_number(get_the_ID( ));?></a></h5></span>
        </div>
    </div>
    <div class="SingleContent">
        <figure class="SingleFigure">
            <?php the_post_thumbnail('', ['class'=>'SingleThumbnail']);?>
        </figure>
        <?php
            the_content();
        ?>
    </div>
</article>