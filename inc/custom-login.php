<?php

function eigen_login_logo()
{ ?>
    <style type="text/css">
        .login {
            background-color: #fafaf9;
            position: relative;
        }

        #loginform {
            background: unset;
            border: none;
            box-shadow: none;
        }

        .wp-core-ui .button-primary {
            background: #000 !important;
        }


        #login {
            padding: 16% 0 0 !important;
        }

        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/cornelis-logo.svg);
            width: 300px;
            height: 50px;
            background-size: contain;
        }

        #loginform {
            border-radius: 10px !important;
        }

        .login #nav, .login #backtoblog {
            padding: 0 !important;
        }

        #nav a, #backtoblog a {
            color: #fff !important;
            text-align: center;
            display: block;


        }
    </style>
<?php }

add_action('login_enqueue_scripts', 'eigen_login_logo');

?>