<?php
/*
Plugin Name: Times New Bastard Font
Plugin URI: https://example.com/
Description: Changes the font to Times New Bastard.
Version: 1.0
Author: Your Name
Author URI: https://example.com/
License: GPLv2 or later
Text Domain: times-new-bastard
*/

// Enqueue the custom font stylesheet
function tnb_enqueue_font() {
    wp_enqueue_style( 'tnb-font', plugin_dir_url( __FILE__ ) . 'times-new-bastard.css', array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'tnb_enqueue_font' );

// Register the custom font in the editor
function tnb_editor_styles( $stylesheets ) {
    $stylesheets['tnb-font'] = plugin_dir_url( __FILE__ ) . 'times-new-bastard.css';
    return $stylesheets;
}
add_filter( 'mce_css', 'tnb_editor_styles' );
