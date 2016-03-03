<?php
/**
 * Plugin Name: I Hate Metaboxes 
 * Plugin URI: http://GrantAustin.org
 * Description: This plugin removes metaboxes that get outlandish. Best for The EDM Family (and other multi-user blogs.
 * Version: 1.0.6
 * Author: Grant Austin
 * Author URI: http://GrantAustin.org
 * License: GPL2
 */

if( current_user_can('families') ) {
	function remove_my_post_metaboxes() {
		remove_meta_box( 'commentstatusdiv','post','normal' ); // Discussion Metabox
		remove_meta_box( 'postcustom','post','normal' ); // Custom Fields Metabox
		remove_meta_box( 'postexcerpt','post','normal' ); // Excerpt Metabox
		remove_meta_box( 'wpseo_meta', 'post', 'normal' );
	}
	add_action('admin_menu','remove_my_post_metaboxes');

	function remove_my_events_metaboxes() {
		remove_meta_box( 'commentstatusdiv','events','normal' ); // Discussion Metabox
		remove_meta_box( 'postcustom','events','normal' ); // Custom Fields Metabox
		remove_meta_box( 'postexcerpt','events','normal' ); // Excerpt Metabox
	}
	add_action('admin_menu','remove_my_events_metaboxes');

	function remove_dashboard_widgets(){
		remove_meta_box('dashboard_right_now', 'dashboard', 'normal');   // Right Now
		remove_meta_box('dashboard_activity', 'dashboard', 'normal');   // Activity
		remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal'); // Recent Comments
		remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');  // Incoming Links
		remove_meta_box('dashboard_plugins', 'dashboard', 'normal');   // Plugins
		remove_meta_box('dashboard_quick_press', 'dashboard', 'side');  // Quick Press
		remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');  // Recent Drafts
		remove_meta_box('dashboard_primary', 'dashboard', 'side');   // WordPress blog
		remove_meta_box('dashboard_secondary', 'dashboard', 'side');   // Other WordPress News
	}
}
	add_action('wp_dashboard_setup', 'remove_dashboard_widgets');