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
        <article>
            <figure>
                <a href="<?= esc_url(get_permalink($query_featured->id));?>">
                    <?php the_post_thumbnail( '', ['class'=>'FeaturedImg']) ?>
                </a>
            </figure>
        </article>
</div>