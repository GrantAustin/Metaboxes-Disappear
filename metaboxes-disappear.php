<?php
/**
 * Plugin Name: I Hate Metaboxes 
 * Plugin URI: http://GrantAustin.org
 * Description: This plugin removes metaboxes that get outlandish. Best for EDM Assassin (and other multi-user blogs.
 * Version: 0.0.3
 * Author: Grant Austin
 * Author URI: http://GrantAustin.org
 * License: GPL2
 */


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
add_action('admin_menu','remove_my_post_metaboxes');

function remove_my_page_metaboxes() {
	remove_meta_box( 'postcustom','page','normal' ); // Custom Fields Metabox
	remove_meta_box( 'postexcerpt','page','normal' ); // Excerpt Metabox
	remove_meta_box( 'commentstatusdiv','page','normal' ); // Comments Metabox
	remove_meta_box( 'trackbacksdiv','page','normal' ); // Talkback Metabox
	remove_meta_box( 'slugdiv','page','normal' ); // Slug Metabox
	remove_meta_box( 'authordiv','page','normal' ); // Author Metabox
}
add_action('admin_menu','remove_my_page_metaboxes');

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
add_action('wp_dashboard_setup', 'remove_dashboard_widgets');