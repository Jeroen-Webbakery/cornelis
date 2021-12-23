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

}
