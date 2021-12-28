<article class="ArchiveItem">
    <figure class="ArchiveFigure">
        <a href="<?= esc_url(get_permalink()); ?>">
            <?php the_post_thumbnail( '', ['class'=> 'ArchiveThumbnail'] ) ?>
        </a>
    </figure>
    <div class="ArchiveItemDate">
        <span><?php the_title('<h3 class="ArchiveTitlePost"><a href='.get_the_permalink().'>','</a></h3>'); ?></span>
        <span><?php the_excerpt(); ?></span>
        <span class="ArchivePostAutor"><h5><?php the_author(); ?></h5></span>
        <a class="SeeMore" href="<?= esc_url(get_permalink()); ?>">Leer</a>
    </div>
</article>