<main id="primary" class="site-main SinglePage">

<?php
while ( have_posts() ) :
    the_post();
?>
    <div class="WrapperSingle">
        <?php   get_template_part('template-parts/components/single/element','single');
                get_template_part('template-parts/components/single/element','author');
        ?>
    <?php
    // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
    ?>
    </div>
    <?php
endwhile; // End of the loop.
?>
    <?php get_template_part('template-parts/components/single/element-widget','single'); ?>
</main><!-- #main -->
<?php

