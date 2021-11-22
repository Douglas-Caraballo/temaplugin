<?php get_template_part('template-parts/components/reusable/element', 'logo');?>
<?php if(is_active_sidebar('footer')):?>
    <div id="footer" class="FooterWidgetArea">
        <?php dynamic_sidebar('footer'); ?>
    </div>
<?php endif; ?>