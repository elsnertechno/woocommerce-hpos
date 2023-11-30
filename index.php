<?php
/*
Plugin Name: WooCommerce Plugin Demo
Description: How to make WooCommerce Add-ons compatible with HPOS
Version: 1.0
Author: Elsner Technologies Pvt. Ltd.
Author URI: http://www.elsner.com
*/

add_action('before_woocommerce_init', function(){
    if ( class_exists( \Automattic\WooCommerce\Utilities\FeaturesUtil::class ) ) {
        \Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility( 'custom_order_tables', __FILE__, true );
    }
});