<?php
function TemaAreasWidgets(){

    register_sidebar( array(
        'name' => __('Tema Footer', 'Tema'),
        'id' => 'footer',
        'description' => __('Widget area to define widgest into footer','Tema'),
        'before_widget' => '<div class="FooterWidgets %2$s">',
        'after_widget' => '</div>'
    ));

    register_sidebar( array(
        'name' => __('Tema Home', 'Tema'),
        'id' => 'home',
        'description' => __('Widget area to define widgest into Home','Tema'),
        'before_widget' => '<div class="HomeWidgets %2$s">',
        'after_widget' => '</div>'
    ));

}

add_action( 'widgets_init', 'TemaAreasWidgets');