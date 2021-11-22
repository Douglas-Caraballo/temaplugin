<?php
function TemaAreasWidgets(){

    register_sidebar( array(
        'name' => __('Tema Footer', 'Tema'),
        'id' => 'footer',
        'description' => __('Widget area to define widgest into footer','Tema'),
        'before_widget' => '<div class="FooterWidgets %2$s">',
        'after_widget' => '</div>'
    ));

}

add_action( 'widgets_init', 'TemaAreasWidgets');