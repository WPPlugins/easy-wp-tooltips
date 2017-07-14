<?php
/*
Plugin Name: Easy WP Tooltips
Description: Add tooltips to your content easily using a simple shortcode!
Author: Wouter Postma
Author URI: https://wouterpostma.nl
Version: 1.1
*/

/* Load styles */
function tooltipwp_load_tooltip_css() {
    $plugin_url = plugin_dir_url( __FILE__ );

    wp_enqueue_style( 'tooltip-wp', $plugin_url . '/tooltip-wp.css' );
}
add_action( 'wp_enqueue_scripts', 'tooltipwp_load_tooltip_css' );



/* Tooltip shortcode */
function tooltipwpshortcode( $atts, $content = null ) {
    $a = shortcode_atts( array(
	'text'  =>  '',
	'location'  =>  'top',
	'href'  =>  '#',
	'rel'  =>  'follow',
	'target'  =>  'self'
    ), $atts );

    return '<a href="'. esc_attr($a['href']) .'" class="wptooltip-'. esc_attr($a['location']) .'" data-tooltip="'. esc_attr($a['text']) .'" target="'. esc_attr($a['target']) .'" rel="'. esc_attr($a['rel']) .'">' . $content . '</a>';
}
add_shortcode( 'tooltip', 'tooltipwpshortcode' );
add_shortcode( 'Tooltip', 'tooltipwpshortcode' );