<?php
/**
 * Plugin Name:      MB User Profile
 * Plugin URI:       https://metabox.io/plugins/mb-user-profile/
 * Description:      Register, edit user profiles with custom fields on the front end.
 * Version:          2.5.6
 * Author:           MetaBox.io
 * Author URI:       https://metabox.io
 * License:          GPL2+
 * Text Domain:      mb-user-profile
 * Domain Path:      /languages/
 * Requires Plugins: meta-box
 */

// Prevent loading this file directly.
defined( 'ABSPATH' ) || die;

if ( ! function_exists( 'mb_user_profile_load' ) ) {
	if ( file_exists( __DIR__ . '/vendor' ) ) {
		require __DIR__ . '/vendor/autoload.php';
		require __DIR__ . '/vendor/meta-box/mb-user-meta/mb-user-meta.php';
		require __DIR__ . '/vendor/meta-box/mb-settings-page/mb-settings-page.php';
	}

	/**
	 * Hook to 'init' with priority 4 to make sure all actions are registered before Meta Boxes and MB Settings Page runs.
	 */
	add_action( 'init', 'mb_user_profile_load', 4 );

	/**
	 * Load plugin files after Meta Box is loaded
	 */
	function mb_user_profile_load() {
		if ( ! defined( 'RWMB_VER' ) ) {
			return;
		}

		list( , $url ) = RWMB_Loader::get_path( __DIR__ );
		define( 'MBUP_URL', $url );
		define( 'MBUP_VER', '2.5.6' );
		define( 'MBUP_DIR', __DIR__ );

		$languages_dir = trim( str_replace( wp_normalize_path( WP_PLUGIN_DIR ), '', wp_normalize_path( __DIR__ . '/languages' ) ), '/' );
		load_plugin_textdomain( 'mb-user-profile', false, $languages_dir );

		add_filter( 'rwmb_admin_menu', '__return_true' );

		new MetaBox\UserProfile\DefaultFields;
		new MetaBox\UserProfile\UserFields;
		new MetaBox\UserProfile\Settings;
		new MetaBox\UserProfile\EmailConfirmation;
		new MetaBox\UserProfile\Shortcodes;
		new MetaBox\UserProfile\Block\RegistrationForm;
		new MetaBox\UserProfile\Block\LoginForm;
		new MetaBox\UserProfile\Block\ProfileForm;
		new MetaBox\UserProfile\Elementor\Register;
		new MetaBox\UserProfile\Oxygen\Register;
		new MetaBox\UserProfile\Bricks\Register;

		// Add dependency notice in AIO.
		if ( class_exists( 'MetaBox\Dependency\Plugins' ) ) {
			new MetaBox\Dependency\Plugins( 'MB User Profile', [
				[
					'name'     => 'MB User Meta',
					'function' => 'mb_user_meta_load',
				],
				[
					'name'     => 'MB Settings Page',
					'function' => 'mb_settings_page_load',
				],
			], [
				// Translators: %1$s - the plugin name, %2$s - extensions, %3$s - action.
				'message'  => __( '%1$s requires %2$s to function correctly. %3$s.', 'mb-user-profile' ),
				'activate' => __( 'Activate now', 'mb-user-profile' ),
			] );
		}
	}
}
