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
 * Test Domain: sample-plugin
 * Domain Path: /languages
 */

function sample_plugin_settings_page()
{
    add_menu_page(
        __('Sample Plugin', 'sample-plugin'),
        __('SP', 'sample-plugin'),
        'manage_options',
        'sample-plugin',
        'sample_plugin_settings_page_markup',
        'dashicons-wordpress-alt',
        100
    );
    add_submenu_page(
            'sample-plugin',
            __('Sample Plugin Feature1', 'sample-plugin'),
            __('SPF1', 'sample-plugin'),
        'manage_options',
        'sample-plugin-feature-1',
        'sample_plugin_settings_subpage_markup'
    );

}

add_action('admin_menu', 'sample_plugin_settings_page');

function sample_plugin_settings_page_markup()
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

function sample_plugin_settings_subpage_markup()
{
    if ( ! current_user_can('manage_options'))
    {
        return;
    }
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( get_admin_page_title() ); ?></h1>
        <h1><?php esc_html_e( 'Some Content For Feature 1' ); ?></h1>
    </div>
    <?php

}