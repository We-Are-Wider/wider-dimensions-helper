<?php
/*
Plugin Name: Tanc Dimensions Helper
Plugin URI: http://www.tancdesign.com
Description: Adds an updating viewport width to the WordPress admin bar (only when you are logged in as administrator). More to come in the future!
Version: 0.1
Author: Jonny Allbut/Tanc Design
Author URI: http://jonnya.net
*/

function tanc_dhelper_add( $admin_bar ) {
	$admin_bar->add_menu( array(
	    'id'    => 'tanc-vpwidth', 
	    'parent' => 'top-secondary',
	    'title' => 'Width',
	    'href'  => '#',
	    'meta'  => array(
	    'title' => __('Viewport width'),
	    ),
	) );
}

function tanc_dhelper_register() {
	wp_register_script('tanc_mqhelper', plugins_url('/js/tanc-dhelper.js', __FILE__), array('jquery'), '1.0', true);
}

function tanc_dhelper_print() {
	wp_print_scripts('tanc_mqhelper'); 		
}

// Do everything, but not in the admin area thanks buddy
function tanc_dhelper_do() {
	if ( is_super_admin() && !is_admin() ) {
		add_action( 'admin_bar_menu', 'tanc_dhelper_add' );
		add_action('init', 'tanc_dhelper_register');
		add_action('wp_footer', 'tanc_dhelper_print');
	}	
}

add_action('init', 'tanc_dhelper_do', 1);

?>