<?php
/*
Plugin Name: codearosa local font
Plugin URI: https://codearosa.de/plugins/codearosa-local-font
Description: codarosa theme - load all local fonts with css
Version: 1.0
Author: Melanie Müller
Author URI: http://codearosa.de
License: none
*/

//Enable css
function codearosa_local_font() {

  wp_enqueue_style('codearosalocalfont-css', plugins_url( '/css/codearosalocalfont.css', __FILE__ ), array(), '1.1', 'all' );
}
add_action('wp_enqueue_scripts','codearosa_local_font');
