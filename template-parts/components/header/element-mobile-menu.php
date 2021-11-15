<aside class="AsideMenu AsideActivate" id="menu">
    <div class="AsideWrapper">
        <span class="AsideClose" id="close">&times</span>
        <div class="MobileMenu">
            <?php
                $args= [
                    'menu'=>'Menu 1',
                    'menu_class'=>'MenuNavMobile',
                    'container'=>''
                ];

                wp_nav_menu($args);
            ?>
        </div>
    </div>
</aside>