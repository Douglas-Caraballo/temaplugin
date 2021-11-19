<?php
function TemaAreasWidgets(){

    register_sidebar( array(
        'name'=>__('Tema Footer', 'wordpressplugin'),
        'id'=>'footer',
        'description'=>__('','wordpressplugin'),
        'before_widgets'=>'<div class="FooterWidgets %2$s">',
        'after_widget'=>'</div>'
    ) );

}

add_action( 'widgets_init', 'TemaAreasWidgets');