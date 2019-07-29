<?php
/*
Plugin name: SWA-BitCoin
Plugin URI: https://sahandwebafzar.ir/swa-bitcoin
Description: it's a Dashboard of BitCoin.
Version: V1.0.0
Author: Mohammad Javad Qasemi
Author URI: https://javad.in/
Text Domain: -e('SWA-BitCoin','swa-bitcoin')
 */
defined('ABSPATH') || exit('No Direct Access.');
define('SWA_BITCOIN_DIR', plugin_dir_path(__FILE__));
define('SWA_BITCOIN_URL', plugin_dir_url(__FILE__));
define('SWA_BITCOIN_CSS_URL', trailingslashit(SWA_BITCOIN_URL.'assets/css'));
define('SWA_BITCOIN_JS_URL', trailingslashit(SWA_BITCOIN_URL.'assets/js'));
define('SWA_BITCOIN_IMG_URL', trailingslashit(SWA_BITCOIN_URL.'assets/img'));
define('SWA_BITCOIN_INC_DIR', trailingslashit(SWA_BITCOIN_DIR.'include'));
define('SWA_BITCOIN_ADMIN_DIR', trailingslashit(SWA_BITCOIN_DIR.'admin'));
define('SWA_BITCOIN_TPL_DIR', trailingslashit(SWA_BITCOIN_DIR.'template'));
define('SWA_BITCOIN_VERSION', "1.0.0");


require SWA_BITCOIN_INC_DIR.'assets.php';
require SWA_BITCOIN_INC_DIR.'shortcodes.php';
add_action('plugins_loaded', 'SWA_BTC_textdomain');
function SWA_BTC_textdomain() {
	load_plugin_textdomain( 'swa-bitcoin', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );
}
if(is_admin())
{
	require_once SWA_BITCOIN_ADMIN_DIR.'admin.php';
}
require SWA_BITCOIN_INC_DIR."class/Bitcoin.php";
$BTC = new Bitcoin();