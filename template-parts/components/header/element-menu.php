<div class="HeaderMenu">
    <?php
        $args = [
            'menu'=> 'Menu 1',
            'menu_class'=>'MenuNavDesktop',
            'container'=>'',
        ];

        wp_nav_menu($args);
    ?>
    <ul class="Dropdown">
        <button class="DropdownSocialList DropdownMenuItem">
            Follow
        </button>
        <div class="SocialList">
            <?php get_template_part( 'template-parts/components/reusable/element', 'social' ) ?>
        </div>
    </ul>
    <?php
        get_template_part( 'template-parts/components/reusable/element-dark', 'theme' );
    ?>
</div>