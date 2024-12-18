<?php
/**
 * Plugin Name: Chicago Reader Newspack
 * Plugin URI: https://github.com/chicagoreader/chicago-reader-newspack
 * Description: Custom styles and tweaks to Newspack
 * Version: 1.0.0
 */

defined( 'ABSPATH' ) || exit;

function chicago_reader_scripts() {
  wp_enqueue_style(
    'chicago-reader',
    WP_PLUGIN_URL . '/chicago-reader-newspack/css/chicago-reader.css',
    array(),
    filemtime( WP_PLUGIN_DIR . '/chicago-reader-newspack/css/chicago-reader.css' ),
  );
  wp_enqueue_script(
    'chicago-reader',
    WP_PLUGIN_URL . '/chicago-reader-newspack/js/chicago-reader.js',
    array(),
    filemtime( WP_PLUGIN_DIR . '/chicago-reader-newspack/js/chicago-reader.js' ),
  );
}
add_action('wp_enqueue_scripts', 'chicago_reader_scripts', 99);