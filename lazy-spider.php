<?php
/**
 * Plugin Name: Lazy Spider
 * Plugin URI: https://spiders.agency/
 * Description: This plugin add lazy loading to all site.  Not only for the_content filter etc.
 * Version: 0.1
 * Author: Spiders Agency
 * Author URI: https://spiders.agency/
 * License: GPL2
 */

/**
 * Include scripts and css
 */
function my_assets() {

  wp_enqueue_style( 'lazyloadxt-css', plugin_dir_url( __FILE__ ) . 'assets/lazyloadxt/jquery.lazyloadxt.fadein.min.css' );
  
  wp_enqueue_script( 'lazyloadxt-js', plugin_dir_url( __FILE__ ) . 'assets/lazyloadxt/jquery.lazyloadxt.min.js', array( 'jquery' ), '1.0', true );

  //wp_enqueue_script( 'lazySpider-js', plugin_dir_url( __FILE__ ) . 'lazy-spider.js', array( 'jquery' ), '1.0', true );
  
}

add_action( 'wp_enqueue_scripts', 'my_assets');
