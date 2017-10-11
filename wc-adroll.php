<?php
/**
 * Plugin Name:       WooCommerce - AdRoll
 * Description:       Integrate AdRoll into your WooCommerce powered website.
 * Author:            Mindsize
 * Author URI:        http://mindsize.me
 * Version:           1.0.0
 * Requires at least: 4.4
 * Tested up to:      4.8
 */

define( 'WC_ADROLL_BASE_VERSION', '1.0.0' );
define( 'WC_ADROLL_BASE_SLUG', 'wc-adroll' );
define( 'WC_ADROLL_FILE', __FILE__ );
define( 'WC_ADROLL_BASE_DIR', plugin_dir_path( WC_ADROLL_FILE ) );
define( 'WC_ADROLL_BASE_URL', untrailingslashit( plugins_url( basename( plugin_dir_path( WC_ADROLL_FILE ) ), basename( WC_ADROLL_FILE ) ) ) );

if( file_exists( WC_ADROLL_BASE_DIR . 'vendor/autoload_52.php' ) ) {
	require( WC_ADROLL_BASE_DIR . 'vendor/autoload_52.php' );
}

/**
 * Add the WC AdRoll integration to WooCommerce to be loaded.
 *
 * @param array $integrations
 *
 * @return array
 */
function wc_add_adroll_integration( $integrations = array() ) {
	// Only add the class if the class exists.
	if( class_exists( 'WC_AdRoll' ) ) {
		$integrations[] = 'WC_AdRoll';
	}

	return $integrations;
}
add_filter( 'woocommerce_integrations', 'wc_add_adroll_integration' );