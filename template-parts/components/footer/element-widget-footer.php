<?php get_template_part('template-parts/components/reusable/element', 'logo');?>
<?php if(is_active_sidebar('footer')):?>
    <div id="footer">
        <?php dynamic_sidebar('footer'); ?>
    </div>
<?php endif; ?>