<?php
add_action('admin_menu', 'SalamQuran_admin_menu');

function SalamQuran_admin_menu(){

	$main = add_menu_page(__('SALAM_QURAN', 'SalamQuran-wp'), __('SALAM_QURAN', 'SalamQuran-wp'), 'manage_options', 'SalamQuran_dashboard', 'SalamQuran_dashboard_page', SALAM_QURAN_IMG_URL."logo.svg");

	$main_sub = add_submenu_page('SalamQuran_dashboard', __('SALAM_QURAN', 'SalamQuran-wp'), __('SALAM_QURAN', 'SalamQuran-wp'), 'manage_options', 'SalamQuran_dashboard');

}

function SalamQuran_dashboard_page ()
{
    // global $BTC;
    require SALAM_QURAN_TPL_DIR.'html-admin-main.php';
}