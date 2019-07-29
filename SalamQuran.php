<?php
/*
Plugin name: SalamQuran-wp
Plugin URI: https://github.com/geeksesi/SalamQuran-wordpress-plugin
Description: you can access to Quran anywhere
Version: V0.1.0
Author: Mohammad Javad Qasemi
Author URI: https://github.com/geeksesi
Text Domain: -e('SalamQuran-wp','SalamQuran-wp')
 */
defined('ABSPATH') || exit('No Direct Access.');
define('SALAM_QURAN_DIR', plugin_dir_path(__FILE__));
define('SALAM_QURAN_URL', plugin_dir_url(__FILE__));
define('SALAM_QURAN_CSS_URL', trailingslashit(SALAM_QURAN_URL.'assets/css'));
define('SALAM_QURAN_JS_URL', trailingslashit(SALAM_QURAN_URL.'assets/js'));
define('SALAM_QURAN_IMG_URL', trailingslashit(SALAM_QURAN_URL.'assets/img'));
define('SALAM_QURAN_INC_DIR', trailingslashit(SALAM_QURAN_DIR.'include'));
define('SALAM_QURAN_ADMIN_DIR', trailingslashit(SALAM_QURAN_DIR.'admin'));
define('SALAM_QURAN_TPL_DIR', trailingslashit(SALAM_QURAN_DIR.'template'));
define('SALAM_QURAN_VERSION', "0.1.0");


require SALAM_QURAN_INC_DIR.'assets.php';
require SALAM_QURAN_INC_DIR.'shortcodes.php';
add_action('plugins_loaded', 'SALAM_QURAN_textdomain');
function SALAM_QURAN_textdomain() {
	load_plugin_textdomain( 'SalamQuran-wp', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );
}
if(is_admin())
{
	require_once SALAM_QURAN_ADMIN_DIR.'admin.php';
}
require SALAM_QURAN_INC_DIR."class/Bitcoin.php";
