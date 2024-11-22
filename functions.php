<?php

add_filter('woocommerce_catalog_orderby', 'custom_remove_sorting_options');
add_filter('woocommerce_default_catalog_orderby_options', 'custom_remove_sorting_options');

function custom_remove_sorting_options($options) {
    // Remove unwanted sorting options
    unset($options['price']);          // Remove "Price: Low to High"
    unset($options['price-desc']);    // Remove "Price: High to Low"
    unset($options['date']);          // Remove "Sort by Latest"
    unset($options['rating']);        // Remove "Average Rating"
    return $options;
}
