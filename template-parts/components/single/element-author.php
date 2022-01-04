<section class="SectionAuthor">
    <h3 class="SectionAuthorTitle">- Autor -</h3>
    <div class="SectionAuthorDescription">
        <figure class="AuthorAvatar">
            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
                <?php
                    echo get_avatar(get_the_author_meta('ID'), 100);
                ?>
            </a>
        </figure>
        <div class="AuthorInfo">
            <span class="AutorName">
                <h4>
                    <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
                        <?php the_author(); ?>
                    </a>
                </h4>
            </span>
            <?php the_author_meta('description'); ?>
        </div>
    </div>
</section>