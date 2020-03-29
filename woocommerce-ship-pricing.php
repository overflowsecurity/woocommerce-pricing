<?php
/*
    Plugin Name: Woocommerce Shipping Pricing
    description: This plugin makes it possible to price shipping by number of items.
    Author: Justin Tharpe
    Version: Beta 1.0.0
*/


if (!defined('ABSPATH')) die('No direct access allowed');


function woo_ship_price($rates, $package){
    foreach($rates as $id => $rate) {
        echo $id . '';
    }

    return $rates;
}

add_filter('woocommerce_package_rates', array($this, 'woo_ship_price'), 10, 2 ); 

?>