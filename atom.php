<?php
/*
   Plugin Name: Atom
   Plugin URI: https://www.apsolutions.in
   description: APS Starter Pack
   Version: 1.2
   Author: APS
   Author URI: https://www.apsolutions.in
   License: GPL2
*/

require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'aps_register_required_plugins' );

function aps_register_required_plugins() {

	$plugins = array(
		array(
			'name'      => 'Classic Editor',
			'slug'      => 'classic-editor',
			'required'  => true,
		),
		array(
			'name'      => 'Disable Comments',
			'slug'      => 'disable-comments',
			'required'  => true,
		),
		array(
			'name'      => 'Elementor',
			'slug'      => 'elementor',
			'required'  => true,
		),
		array(
			'name'      => 'Elementor Addon Elements',
			'slug'      => 'addon-elements-for-elementor-page-builder',
			'required'  => true,
		),	
		array(
			'name'      => 'Elementor Header & Footer Builder',
			'slug'      => 'header-footer-elementor',
			'required'  => true,
		),	
		array(
			'name'      => 'Flexy Breadcrumb',
			'slug'      => 'flexy-breadcrumb',
			'required'  => true,
		),	
		array(
			'name'      => 'Happy Elementor Addons',
			'slug'      => 'happy-elementor-addons',
			'required'  => true,
		),	
		array(
			'name'      => 'Master Addons for Elementor',
			'slug'      => 'master-addons',
			'required'  => true,
		),
		array(
			'name'      => 'MC4WP: Mailchimp for WordPress',
			'slug'      => 'mailchimp-for-wp',
			'required'  => true,
		),
		array(
			'name'      => 'Popup Maker',
			'slug'      => 'popup-maker',
			'required'  => true,
		),
		array(
			'name'      => 'Preloader Plus',
			'slug'      => 'preloader-plus',
			'required'  => true,
		),
		array(
			'name'      => 'Regenerate Thumbnails',
			'slug'      => 'regenerate-thumbnails',
			'required'  => true,
		),	
		array(
			'name'      => 'ShiftNav Responsive Mobile Menu',
			'slug'      => 'shiftnav-responsive-mobile-menu',
			'required'  => true,
		),	
		array(
			'name'      => 'Smart Slider 3',
			'slug'      => 'smart-slider-3',
			'required'  => true,
		),
		array(
			'name'      => 'Strong Testimonials',
			'slug'      => 'strong-testimonials',
			'required'  => true,
		),
		array(
			'name'      => 'Ultimate Post Kit',
			'slug'      => 'ultimate-post-kit',
			'required'  => true,
		),
		array(
			'name'      => 'WPCode Lite',
			'slug'      => 'insert-headers-and-footers',
			'required'  => true,
		),
		array(
			'name'      => 'Forminator',
			'slug'      => 'forminator',
			'required'  => true,
		),		
		array(
			'name'      => 'Rankmath',
			'slug'      => 'seo-by-rank-math',
			'required'  => true,
		)		
	);

	$config = array (
		'id'           => 'aps',
		'menu'         => 'atom',
		'parent_slug'  => 'plugins.php',
		'capability'   => 'manage_options',
		'has_notices'  => true,
		'dismissable'  => false,
		'dismiss_msg'  => 'Please install & activate all these plugins as part of the APS Starter Pack',
		'is_automatic' => false,
		'message'      => '<!--APS Starter Pack-->',
		'strings'      => array(
			'page_title'                      => __( 'APS Atom', 'aps' ),
			'menu_title'                      => __( 'APS Atom', 'aps' ),
			'installing'                      => __( 'Installing Plugin: %s', 'aps' ),
			'updating'                        => __( 'Updating Plugin: %s', 'aps' ),
			'oops'                            => __( 'Something went wrong with the plugin API.', 'aps' ),
			'return'                          => __( 'Return to Required Plugins Installer', 'aps' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'aps' ),
			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'aps' ),
			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'aps' ),
			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'aps' ),
			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'aps' ),
			'dismiss'                         => __( 'Dismiss this notice', 'aps' ),
			'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'aps' ),
			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'aps' ),
			'nag_type'                        => 'updated'
		)	
	);	

	tgmpa( $plugins, $config );
}