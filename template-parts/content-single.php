<main id="primary" class="site-main">

<?php
while ( have_posts() ) :
    the_post();
?>
    <div>
        <?php get_template_part('template-parts/components/single/element','single'); ?>
    </div>
    <?php

    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;

endwhile; // End of the loop.
?>

</main><!-- #main -->
<?php

