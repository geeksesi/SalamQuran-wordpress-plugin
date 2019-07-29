<?php
add_action('admin_menu', 'swa_bitcoin_admin_menu');

function swa_bitcoin_admin_menu(){

	$main = add_menu_page(__('SWA BitCoin', 'swa-bitcoin'), __('SWA BitCoin', 'swa-bitcoin'), 'manage_options', 'swa_bitcoin_dashbord', 'swa_bitcoin_dashboard_page',SWA_BITCOIN_IMG_URL."logo.svg");

	$main_sub = add_submenu_page('swa_bitcoin_dashbord', __('SWA BitCoin', 'swa-bitcoin'), __('SWA BitCoin', 'swa-bitcoin'), 'manage_options', 'swa_bitcoin_dashbord');

}

function swa_bitcoin_dashboard_page ()
{
    global $BTC;
    require SWA_BITCOIN_TPL_DIR.'html-admin-main.php';
}