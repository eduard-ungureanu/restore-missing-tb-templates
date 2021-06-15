<?php
/**
 * Plugin Name: Divi Restore Theme Builder Templates
 * Plugin URI: https://github.com/eduard-ungureanu/restore-missing-tb-templates
 * Description: This plugin allows restoring any Missing Theme Builder templates
 * Version: 1.0
 * Author: <a href="">Eduard Ungureanu</a> and <a href="https://www.linkedin.com/in/mdtanjid/">Mohammad Tanjid</a>
 * Author URI: https://divi.tech
 */


 function modify_et_theme_builder_postypes( $post_type, $args ){
	if ( 'et_header_layout' == $post_type || 'et_footer_layout' == $post_type || 'et_body_layout' == $post_type ) {	
		global $wp_post_types;
		$args->show_ui            	= true;
		$args->public            	= true;
		$args->show_in_menu       	= true;
		$args->_edit_link           = 'post.php?post=%d';
		$wp_post_types[ $post_type ] = $args;
	}
}
add_action( 'registered_post_type', 'modify_et_theme_builder_postypes', 10, 2 );