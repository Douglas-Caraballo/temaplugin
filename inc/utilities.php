<?php
/**
 * Modificaciones a la nuve de tags
 */

function wordpressplugin_widget_tag_cloud_args( $args ) {
	$args['largest']  = 1;
	$args['smallest'] = 1;
	$args['unit']     = "rem";
    return $args;
}
add_filter( 'widget_tag_cloud_args', 'wordpressplugin_widget_tag_cloud_args' );