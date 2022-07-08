<?php
/*
 * Plugin Name: Sample Plugin Test
 * Plugin URI: #
 * Description: Some description here about this plugin
 * Version: 1.0.0
 * Contributors: *[wordpress repository username]
 * Author: Sohel
 * Author URI: https://www.linkedin.com/in/mdsohelrana1994/
 * License: GPLv2 or later
 * License URI: #
 * Test Domain: wpplugin
 * Domain Path: /languages
 */

function wpplugin_settings_page()
{
    add_menu_page(
        'Plugin Name',
        'Plugin Name(Short)',
        'manage_options',
        'sample-plugin',
        'wpplugin_settings_page_markup',
        'dashicons-wordpress-alt',
        100
    );
}

add_action('admin_menu', 'wpplugin_settings_page');

function wpplugin_settings_page_markup()
{
    if ( ! current_user_can('manage_options')){
        return;
    }
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( get_admin_page_title() ); ?></h1>
        <h1><?php esc_html_e( 'Some Content' ); ?></h1>
    </div>
    <?php
}