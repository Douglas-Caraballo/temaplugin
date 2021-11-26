<div class="WrapperHomeWidgets">
<?php if(is_active_sidebar('home')): ?>
    <aside id="home" class="HomeWidgetsArea">
        <?php dynamic_sidebar('home'); ?>
    </aside>
<?php endif; ?>
</div>