<?php
/*
    Plugin Name: Woocommerce Shipping Pricing
    description: This plugin makes it possible to price shipping by number of items.
    Author: Justin Tharpe
    Version: Beta 1.0.0
*/


if (!defined('ABSPATH')) die('No direct access allowed');


function woo_ship_price($rates, $package){
    
    if(isset($rates['flat_rate:1'])){
        echo "Set!";
        $rates['flat_rate:1']->cost = 100;
    }

    return $rates;
}

add_filter('woocommerce_package_rates', 'woo_ship_price', 10, 2 ); 

?>