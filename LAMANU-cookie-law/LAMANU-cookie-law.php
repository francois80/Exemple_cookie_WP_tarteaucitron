<?php
/*
Plugin Name: LAMANU-cookie-law
Version: 0.1
Plugin URI: http://www.wp-naturo.com
Description: WordPress Plugin for european cookie law.
Author: François
Author URI: http://www.wp-naturo.com
*/
// wp_register_script : fonction qui permet de référencer un script
function LAMANU_scripts(){
    wp_enqueue_script('tarteaucitron', plugin_dir_url(__FILE__) . 'js/tarteaucitron/tarteaucitron.js', [], '1.3', true);
    wp_enqueue_script('tarteaucitron-init', plugin_dir_url(__FILE__) . 'js/tarteaucitron-init.js', [], '1.0', true);
    wp_enqueue_script('services-cookies', plugin_dir_url(__FILE__) . 'js/services.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'LAMANU_scripts');
