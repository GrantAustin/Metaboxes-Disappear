<?php
/**
 * Plugin Name: I Hate Metaboxes 
 * Plugin URI: http://GrantAustin.org
 * Description: This plugin adds some Facebook Open Graph tags to our single posts.
 * Version: 1.0.2
 * Author: Grant Austin
 * Author URI: http://GrantAustin.org
 * License: GPL2
 */


function remove_my_post_metaboxes() {
	function remove_my_post_metaboxes() {
		remove_meta_box( 'authordiv','post','normal' ); // Author Metabox
		remove_meta_box( 'commentstatusdiv','post','normal' ); // Comments Status Metabox
		remove_meta_box( 'commentsdiv','post','normal' ); // Comments Metabox
		remove_meta_box( 'postcustom','post','normal' ); // Custom Fields Metabox
		remove_meta_box( 'postexcerpt','post','normal' ); // Excerpt Metabox
		remove_meta_box( 'revisionsdiv','post','normal' ); // Revisions Metabox
		remove_meta_box( 'slugdiv','post','normal' ); // Slug Metabox
		remove_meta_box( 'trackbacksdiv','post','normal' ); // Trackback Metabox
	}
}
add_action('admin_menu','remove_my_post_metaboxes');

function remove_my_page_metaboxes() {
	function remove_my_page_metaboxes() {
		remove_meta_box( 'postcustom','page','normal' ); // Custom Fields Metabox
		remove_meta_box( 'postexcerpt','page','normal' ); // Excerpt Metabox
		remove_meta_box( 'commentstatusdiv','page','normal' ); // Comments Metabox
		remove_meta_box( 'trackbacksdiv','page','normal' ); // Talkback Metabox
		remove_meta_box( 'slugdiv','page','normal' ); // Slug Metabox
		remove_meta_box( 'authordiv','page','normal' ); // Author Metabox
	}
}
add_action('admin_menu','remove_my_page_metaboxes');