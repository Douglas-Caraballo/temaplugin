<?php

    $args=[
        'post_type'=>'post',
        'post_status'=> 'publish',
        'post_per_page'=>1,
        'tax_query'=>[
            array(
                'taxonomy'=>'section',
                'field'=>'slug',
                'terms'=>'destacado'
            ),
        ]
    ];
    $query_featured = new WP_Query($args);
?>
<div>
    <?php if($query_featured -> have_posts()):?>
        <?php
            while($query_featured -> have_posts()):
                $query_featured-> the_post();
        ?>
        <article class="FeaturedPost">
            <figure class="FeaturedFigure">
                <a href="<?= esc_url(get_permalink($query_featured->id));?>">
                    <?php the_post_thumbnail( '', ['class'=>'FeaturedImg']); ?>
                </a>
            </figure>
            <div class="FeaturedInfo">
                <span class="FeatureInfoDate"><h5><?php the_author();?> / <?php echo get_the_date('M d,Y');?></h5></span>
                <?php the_title( '<h3 class="FeaturedTitle"><a href='.get_the_permalink().'>','</a></h3>'); ?>
                <?php the_excerpt(); ?>
            </div>
            <div class="SeeMoreFeature">
                <a href="<?= esc_url(get_permalink($query_featured->id));?>">Ver post</a>
            </div>
        </article>
        <?php endwhile; ?>
    <?php endif;?>
</div>