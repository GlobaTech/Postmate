?php
/**
 * Plugin Name: arbitrary
 * Description: Allows you to display posts and pages metadata information and custom fields.
 * Version: 1.0
 * Author: Lungisani Mbambo
 * Author URI: https://github.com/GlobaTech/
 * License: GPL2
 */

function arbitrary_styles()
{
    // Register the style.css file
    wp_register_style( 'metadata-style', plugins_url( '/css/style.css', __FILE__ ), array(), '1.0', 'all' );

    // Enqueue the style.css file
    wp_enqueue_style( 'metadata-style' );
}
add_action( 'wp_enqueue_scripts', 'arbitrary_styles' );


new Display_Metadata_Shortcode();
