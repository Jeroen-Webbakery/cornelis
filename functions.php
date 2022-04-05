<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}


include_once 'inc/class-form.php';
add_theme_support('title-tag');
add_theme_support('custom-logo');

function understrap_remove_scripts()
{
    wp_dequeue_style('understrap-styles');
    wp_deregister_style('understrap-styles');

    wp_dequeue_script('understrap-scripts');
    wp_deregister_script('understrap-scripts');

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}

add_action('wp_enqueue_scripts', 'understrap_remove_scripts', 20);

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles()
{
    // Get the theme data
    wp_enqueue_style('child-understrap-styles', get_stylesheet_directory_uri() . '/css/cornelis.min.css', array(), filemtime(get_stylesheet_directory() . '/css/cornelis.min.css'), 'all');
    wp_enqueue_script('child-understrap-scripts', get_stylesheet_directory_uri() . '/js/cornelis.min.js', [ "jquery" ], filemtime(get_stylesheet_directory() . '/js/cornelis.min.js'), true);
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}


function add_child_theme_textdomain()
{
    load_child_theme_textdomain('webtheme', get_stylesheet_directory() . '/languages');
}

add_action('after_setup_theme', 'add_child_theme_textdomain');


function register_my_menus()
{
    register_nav_menus(
        array(
            'footer-menu' => __('Footer Menu'),
        )
    );
}

add_action('init', 'register_my_menus');

// Gutenberg uitschakelen
add_filter('use_block_editor_for_post', '__return_false', 10);
// Disable WordPress Admin Bar for all users
add_filter('show_admin_bar', '__return_false');


// This theme uses wp_nav_menu() in one location.
register_nav_menus(
    array(
        'primary' => esc_html__('Primary', 'cornelis'),
    )
);

/** ACF Option pages */
require get_template_directory() . '/inc/acf.php';
/** ACF Option pages */
require get_template_directory() . '/inc/custom-login.php';
/** Implement the Navwalker */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
/** SVG  Support. */
require get_template_directory() . '/inc/support-svg.php';


add_theme_support('post-thumbnails');


//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-block-style'); // Remove WooCommerce block CSS
}

add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100);


remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is


function array_get($array, $key, $default = null)
{
    return Form::get($array, $key, $default);
}

if (!empty($_POST) && isset($_POST['_type']) && $_POST['_type'] === 'intrest_form') {
    check_interest_form();
}

function check_interest_form()
{


    if (!isset($_POST['_wpnonce']) || !wp_verify_nonce($_POST['_wpnonce'], 'form_intrest')) {
        // Noce failed
        return;


    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//        $_POST = [];
//        unset($_POST);

//        return;
    }

    Form::validate_fields($_POST, [
        'name' => [
            'required' => true,
            'min' => 1,
        ],
        'lastname' => [
            'required' => true,
            'min' => 1,
        ],
        'phone' => [
            'required' => true,
            'phone' => true,
            'min' => 10,
        ],
        'email' => [
            'required' => true,
            'email' => true,
            'min' => 3,
        ],
        'accept' => [
            'required' => false,
        ]
    ]);


//    if (true !== $check_result) {
//        Form::add_error(__($check_result, 'plesmanduyn'));
////        return;
//    }

    if (!Form::is_form_valid()) {
        //
//        return;

    }

    // Call external API
    $response = wp_remote_post('https://api.osre.nl/services/development/contact/verwerk-interesse?access_token=484bf6cd6cb6508fcfc189f0a37278519a4c71ae', [
            'method' => 'POST',
            'timeout' => 5,
            'redirection' => 5,
            'blocking' => true,
            'sslverify' => defined('PD_SSLVERIFY') ? PD_SSLVERIFY : true,
            'headers' => ['Content-Type' => 'application/json; charset=utf-8'],
            'body' => json_encode([
                'contact' => [
                    'name' => array_get($_POST, 'name'),
                    'lastname' => array_get($_POST, 'lastname'),
                    'email' => array_get($_POST, 'email'),
                    'phone' => array_get($_POST, 'phone'),
                ],
            ]),
        ]
    );


    $reponse = json_decode(wp_remote_retrieve_body($response), true);
//    print wp_remote_retrieve_response_code($response);

    // Check if response contains errors
//    if (wp_remote_retrieve_response_code($response) >= 900 || !array_get($reponse, 'ok', true)) {
    if (wp_remote_retrieve_response_code($response) >= 400 ) {
        Form::add_error(__('We konden het formulier niet versturen, probeer het nogmaals!', 'cornelis'));

        if (is_wp_error($response)) {
            //
        } elseif (!array_get($reponse, 'ok', true)) {
            if (!empty(array_get($reponse, 'errors'))) {
                foreach (array_get($reponse, 'errors', []) as $field => $errors) {
                    foreach ($errors as $error) {
                        Form::add_error($error, $field);
                    }
                }
            }
        }

        http_response_code(500);
    } else {
        $_POST = [];
        unset($_POST);

        Form::set_success();
        Form::add_message(__('Formulier succesvol verstuurd!', 'cornelis')); ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'FormulierIngevuld'
            });
            dataLayer = window.dataLayer || [];
            dataLayer.push({'event': 'formulier_ingevuld'});
        </script>

    <?php
    }
}

function slug_provide_walker_instance( $args ) {
    if ( isset( $args['walker'] ) && is_string( $args['walker'] ) && class_exists( $args['walker'] ) ) {
        $args['walker'] = new $args['walker'];
    }
    return $args;
}
add_filter( 'wp_nav_menu_args', 'slug_provide_walker_instance', 1001 );

add_action( 'admin_init', function () {
    remove_menu_page( 'edit.php' );
});