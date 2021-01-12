<?php
/*
Plugin Name: Descending Sort on First Click for Admin Columns
Plugin URI: http://brandonjp.com
Description: On column headers on admin pages, default to descending sort upon first click. By default, WP sorts ascending when you first click a column header. This switches the sorting url to descending. There are no options. Activate the plugin to enable. Deactivate to disable. 
Version: 0.1.2
Author: Brandon Pfeiffer
Author URI: http://brandonjp.com

Text Domain: descending-on-first-click

 */

function descending_on_first_click()
{
    wp_enqueue_script('descending_on_first_click', plugin_dir_url(__FILE__) . 'descending-on-first-click.js?v=0.1.2');
}

add_action('admin_enqueue_scripts', 'descending_on_first_click');
