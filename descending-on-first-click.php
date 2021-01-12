<?php
/*
Plugin Name: Descending Sort on First Click for Admin Columns
Plugin URI: http://brandonjp.com
Description: On column headers on admin pages, default to descending sort upon first click. 
Version: 0.1.1
Author: Brandon Pfeiffer
Author URI: http://brandonjp.com

Text Domain: descending-on-first-click

 */

function descending_on_first_click()
{

    $screen = get_current_screen();

    // load on the NEW and EDIT screens of all post types
    // if ('post' === $screen->base) {
        wp_enqueue_script('descending_on_first_click', plugin_dir_url(__FILE__) . 'descending_on_first_click.js?v=0.1.1');
        print '<script>console.log('.$screen.');</script>';
    // }

}

add_action('admin_enqueue_scripts', 'descending_on_first_click');
