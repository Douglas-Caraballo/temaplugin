<?php

    $args = [
        'post_type' => 'post',
        'post_status' => 'publish',
        'order'=>'DESC',
        'paged' => 1,
        'posts_per_page' => 4,
    ];

    $blog = new WP_Query($args);
?>
<div class="WrapperPosts">
    <span class="SectionTitle"><h1>Post Recientes</h1></span>
    <div class="ContentPost">
        <?php if($blog -> have_posts()):?>
            <?php
                while($blog -> have_posts()):
                    $blog -> the_post();
            ?>
            <article class="ContenPostItem">
                    <figure class="PostImg">
                        <a href="<?= esc_url(get_permalink($blog->id)); ?>">
                            <?php the_post_thumbnail( '', ['class'=>'BlogImg']);?>
                        </a>
                    </figure>
                    <div>
                        <span class="PostCategories"><h5 class="PostCategoriesName">- <?php the_category(' - ');?> -</h5></span>
                        <?php the_title( '<h3 class="PostTitle"><a href='.get_the_permalink().'>','</a></h3>'); ?>
                    </div>
                    <div class="PostExcerpt">
                        <?php the_excerpt();?>
                    </div>
                    <div>
                        <span class="FeatureInfoDate"><h5 class="PostInfoDate"><?php the_author();?> / <?php echo get_the_date('M d,Y');?></h5></span>
                    </div>
            </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <?php get_template_part('template-parts/components/reusable/element-load','more'); ?>
</div>