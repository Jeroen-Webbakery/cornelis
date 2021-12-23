<?php
// Pagina Widget
add_action('wp_dashboard_setup', 'support_dashboard_widget');

function support_dashboard_widget()
{
    global $wp_meta_boxes;
    $current_user = wp_get_current_user();
    // Support widget
    wp_add_dashboard_widget('custom_help_widget', 'Welkom ' . $current_user->display_name . ' ', 'support_dashboard_help');



}

function support_dashboard_help()
{
    echo '<p>Kom je ergens niet uit en heb je support nodig?</p> ';
    echo '<p>Telefoonummer: <a style="text-decoration:none;font-weight:700; color:#000;" href="tel:085 130 8976">085 130 8976</a></p> ';
    echo '<p>Email: <a style="text-decoration:none;font-weight:700; color:#000;" href="mailto:support@webbakery.nl">support@webbakery.nl</a></p> ';
}



