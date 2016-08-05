<?php
/**
 * Custom widgets for this theme.
 *
 * @package fang
 */

/**
 * Register widgetized areas
 */

function fang_widgets_init() {
	
	$widgets = array( '1', '2', '3', '4' );
	foreach ( $widgets as $i ) {
		register_sidebar(array(
			'name' => __( 'Footer Widget ', 'fang' ) .$i,
			'id' => 'footer-widget-'.$i,
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title"><span>',
			'after_title' => '</span></h3>'
		) );
	} // end foreach
}
add_action( 'widgets_init', 'fang_widgets_init' );

function fang_footer_widget_class() {
    $count = 0;

    if ( is_active_sidebar( 'footer-widget-1' ) )
        $count++;

    if ( is_active_sidebar( 'footer-widget-2' ) )
        $count++;

    if ( is_active_sidebar( 'footer-widget-3' ) )
        $count++;

	if ( is_active_sidebar( 'footer-widget-4' ) )
        $count++;

    $class = '';

    switch ( $count ) {
        case '1':
            $class = 'one';
            break;
        case '2':
            $class = 'two';
            break;
        case '3':
            $class = 'three';
            break;
		case '4':
            $class = 'four';
            break;
    }

    if ( $class )
        echo 'class="' . $class . '"';
}