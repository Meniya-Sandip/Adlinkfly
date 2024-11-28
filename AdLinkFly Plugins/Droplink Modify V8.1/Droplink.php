<?php
/*
Plugin Name: Droplink Modify - By RTG Network [ Organic Safelink Desgine ]
Plugin URI: https://www.gpllicensed.xyz/
Description: Droplink is available free of charge for all users. Avoid any payment to third parties.
Version: 8.1
Author: RTG Network
Author URI:  https://rtgnetwork.blogspot.com/
*/


define('WPSAF_FILE', __FILE__);
define('WPSAF_URL', plugins_url('', __FILE__));
define('WPSAF_DIR', plugin_dir_path(__FILE__));

require(WPSAF_DIR . 'plugin-update-checker/plugin-update-checker.php');
require(WPSAF_DIR . 'Droplink.core.php');
require(WPSAF_DIR . 'Droplink.functions.php');

register_activation_hook(__FILE__, 'wpsafelink_activation');
function wpsafelink_activation()
{
	global $wpdb;
	$charset_collate = $wpdb->get_charset_collate();
	$table_name = $wpdb->prefix . 'wpsafelink';
	$sql = "CREATE TABLE $table_name (
		ID bigint(0) NOT NULL AUTO_INCREMENT, 
		date datetime DEFAULT '0000-00-00 00:00:00' NOT NULL, 
		date_view datetime DEFAULT '0000-00-00 00:00:00' NOT NULL, 
		date_click datetime DEFAULT '0000-00-00 00:00:00' NOT NULL, 
		safe_id varchar(8) NOT NULL,
		link longtext NOT NULL,
		view bigint(0) NOT NULL,
		click bigint(0) NOT NULL,
		UNIQUE KEY id (ID)
	) $charset_collate;";
	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	dbDelta($sql);
	if (get_option('wpsaf_options', '') == '') wpsaf_default();

	// Check temp files
	$upload_dir = wp_get_upload_dir();
	$tmp = $upload_dir['basedir'] . '/wpsaf.script.js';
	if(file_exists($tmp)) {
		$data = file_get_contents($tmp);
		$cached = WPSAF_DIR . 'assets/wpsaf.script.js';

		file_put_contents($cached, $data);
		unlink($tmp);
	}
}
function wpsaf_default()
{
	$wpsaf_def = array(
		'permalink1' 	=> 'token',
		'permalink2' 	=> 'token',
		'permalink'		=> 2,
		'linkr'			=> 'redirect',
		'content' 		=> 0,
		'contentid' 	=> '',
		'template' 		=> 'template1',
		'delay' 		=> 20,
		'delaytext' 	=> 'Thank you for your visit. Your links will be created in {time} seconds.',
		'logo'			=> WPSAF_URL . '/assets/logo.png',
		'image1'		=> WPSAF_URL . '/assets/generate4.png',
		'image2'		=> WPSAF_URL . '/assets/wait4.png',
		'image3'		=> WPSAF_URL . '/assets/target4.png',
		'image4'		=> WPSAF_URL . '/assets/human-verification4.png',
		'ads1'			=> '',
		'ads2'			=> '',
		'autosave'		=> 1,
		'redirect'		=> 1,
		'new_tab'		=> 1,
		'base_url'		=> get_bloginfo('url') . '/',
		'adb' 			=> 1,
		'adb1'			=> 'Adblock Detected',
		'adb2'			=> 'Please disable adblock to proceed to the destination page',
		'autoconvert' => 2,
		'skipverification' => 2,
		'second_safelink_url' => '',
		'recaptcha_enable' => 2,
		'recaptcha_site_key' => '',
		'recaptcha_secret_key' => '',
		'recaptcha_text' => 'Please complete reCAPTCHA verification'
	);
	$wpsaf = json_encode($wpsaf_def);
	update_option('wpsaf_options', $wpsaf);
}

add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'wpsafelink_add_settings_link' );
function wpsafelink_add_settings_link( $links ){
  $plugin_links = array(
      '<a href="' . admin_url( 'admin.php?page=Droplink') . '">' . __( 'Settings', 'Droplink' ) . '</a>',
  );

  return array_merge( $plugin_links, $links );
}

add_action( 'init', 'wpsafelink_remove_footer', 10 );
function wpsafelink_remove_footer(){
	global $WPSAF;
	$wpsaf = json_decode(get_option('wpsaf_options'), true);
	if(empty($wpsaf['autojavascript']) || $wpsaf['autojavascript'] == 2) {
		remove_action('wp_footer', array($WPSAF, 'footer_wp_safelink'), 999);
	}
}

register_deactivation_hook(__FILE__, 'wpsafelink_deactivation');
function wpsafelink_deactivation() {
	global $WPSAF;

	$lis = $WPSAF->ceklis('', true);
	if(!empty($lis)) {
		$cached = WPSAF_DIR . 'assets/wpsaf.script.js';
		$data = file_get_contents($cached);
		
		// Store to temp files
		$upload_dir = wp_get_upload_dir();
		$tmp = $upload_dir['basedir'] . '/wpsaf.script.js';
		file_put_contents($tmp, $data);
	}
}

