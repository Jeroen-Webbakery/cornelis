<?php
// Options pages
if (function_exists('acf_add_options_page')) {
// Add parent.

    acf_add_options_page(array(
        'page_title' => 'Footer',
        'menu_title' => 'Footer',
        'menu_slug' => 'cta-settings',
        'capability' => 'manage_options',
    ));

    acf_add_options_page(array(
        'page_title' => 'Appartementen',
        'menu_title' => 'Appartementen',
        'menu_slug' => 'apartments',
        'icon_url' => 'dashicons-building',
        'capability' => 'manage_options',
        'position' => 20
    ));

    acf_add_options_page(array(
        'page_title' => 'Downloads',
        'menu_title' => 'Downloads',
        'menu_slug' => 'downloads',
        'icon_url' => 'dashicons-media-document',
        'capability' => 'manage_options',
        'position' => 100
    ));


}
