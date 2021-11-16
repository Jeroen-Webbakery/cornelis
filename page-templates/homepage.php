<?php
/**
 * Template Name: Homepage
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>

    <section id="thebridge">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-8 column_left header_left">
                    <?= !empty($img = get_field('afbeelding')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => 'header_image_left']) : '' ?>
                    <svg class="logo" viewBox="0 0 243 397" version="1.1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>logo-large</title>
                        <g id="Onepager" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Desktop-the-bridge-v2" transform="translate(-99.000000, -458.000000)" fill="#FFFFFF">
                                <g id="HERO" transform="translate(0.000000, 128.000000)">
                                    <g id="Group" transform="translate(99.000000, 330.000000)">
                                        <path d="M31.1639224,343.287723 L27.0635107,343.287723 L27.0635107,366.361267 L31.1639224,366.361267 L31.1639224,357.317118 L57.1583358,357.317118 L57.1583358,352.333201 L31.1639224,352.333201 L31.1639224,343.287723 Z M57.1583358,305.998716 L27.0635107,305.998716 L27.0635107,310.983963 L39.9138489,310.983963 L39.9138489,324.319597 L27.0635107,324.319597 L27.0635107,329.303514 L57.1583358,329.303514 L57.1583358,324.319597 L44.0142605,324.319597 L44.0142605,310.983963 L57.1583358,310.983963 L57.1583358,305.998716 Z M57.1583358,268.11031 L53.0592473,268.11031 L53.0592473,284.12397 L44.0142605,284.12397 L44.0142605,270.462719 L39.9561894,270.462719 L39.9561894,284.12397 L31.1639224,284.12397 L31.1639224,268.11031 L27.0635107,268.11031 L27.0635107,289.109216 L57.1583358,289.109216 L57.1583358,268.11031 Z M48.6637754,210.377938 C44.858424,210.377938 42.6183475,212.778193 41.6881799,215.315339 C40.886357,213.101151 38.5615995,210.885633 35.3053514,210.885633 C30.2337548,210.885633 27.0635107,214.71594 27.0635107,220.806952 L27.0635107,233.591033 L57.1583358,233.591033 L57.1583358,220.299257 C57.1583358,214.486015 54.1997942,210.377938 48.6637754,210.377938 L48.6637754,210.377938 Z M48.4520729,215.361856 C51.1155542,215.361856 53.0592473,217.300932 53.0592473,220.761764 L53.0592473,228.608444 L43.887239,228.608444 L43.887239,220.761764 C43.887239,217.300932 45.7885916,215.361856 48.4520729,215.361856 L48.4520729,215.361856 Z M35.4747133,215.869551 C38.2652161,215.869551 39.7868274,218.038552 39.7868274,221.222943 L39.7868274,228.608444 L31.1639224,228.608444 L31.1639224,221.222943 C31.1639224,218.038552 32.6855337,215.869551 35.4747133,215.869551 L35.4747133,215.869551 Z M57.1583358,170.736523 L43.8448986,178.304103 C42.914731,174.612017 40.1678918,171.750584 35.8557777,171.750584 C30.7405175,171.750584 27.0635107,175.72044 27.0635107,181.949673 L27.0635107,194.687237 L57.1583358,194.687237 L57.1583358,189.70199 L44.4786827,189.70199 L44.4786827,183.474087 L57.1583358,176.551093 L57.1583358,170.736523 Z M35.8981182,176.734501 C38.8566598,176.734501 40.5886504,178.996535 40.5886504,182.319147 L40.5886504,189.70199 L31.1639224,189.70199 L31.1639224,182.319147 C31.1639224,178.996535 32.9395766,176.734501 35.8981182,176.734501 L35.8981182,176.734501 Z M27.0635107,156.152915 L57.1583358,156.152915 L57.1583358,151.168998 L27.0635107,151.168998 L27.0635107,156.152915 Z M41.8998824,110.926854 C37.546751,110.926854 33.151279,110.6956 29.8950309,114.249466 C27.9936783,116.326763 27.0635107,119.325087 27.0635107,122.740732 L27.0635107,134.278169 L57.1583358,134.278169 L57.1583358,122.740732 C57.1583358,119.325087 56.2294913,116.326763 54.3268156,114.249466 C51.0732138,110.6956 46.2530138,110.926854 41.8998824,110.926854 L41.8998824,110.926854 Z M41.8998824,115.910772 C46.0413114,115.910772 49.2975595,115.955959 51.0295501,117.663782 C52.4254631,119.048646 53.0592473,120.894689 53.0592473,123.248427 L53.0592473,129.294252 L31.1639224,129.294252 L31.1639224,123.248427 C31.1639224,120.894689 31.7977066,119.048646 33.1922964,117.663782 C34.9269333,115.955959 37.7584534,115.910772 41.8998824,115.910772 L41.8998824,115.910772 Z M45.4935313,72.6237864 L40.886357,72.6237864 L40.886357,84.6224018 L44.7750662,84.6224018 L44.7750662,77.6077039 L46.4647163,77.6077039 C48.4097324,77.6077039 49.9313437,78.0688824 51.1989121,79.2690098 C52.5511614,80.5608412 53.3119671,82.4520718 53.3119671,84.6224018 C53.3119671,86.5601489 52.6358424,88.3131588 51.4939724,89.4680987 C49.8890032,91.082888 48.1556895,91.4523624 42.1115848,91.4523624 C36.0674802,91.4523624 34.3765069,91.082888 32.7702146,89.4680987 C31.6283446,88.3131588 30.9098794,86.5601489 30.9098794,84.6224018 C30.9098794,80.9303156 32.8535725,78.530061 36.1521611,77.699408 L36.1521611,72.6689739 C30.9945604,73.59266 26.8107909,77.6542205 26.8107909,84.6224018 C26.8107909,88.1297507 27.9513378,90.9911839 30.0220523,93.2518889 C32.9819171,96.4814674 36.3215231,96.4363134 42.1115848,96.4363134 C47.9029697,96.4363134 51.2412526,96.4814674 54.1997942,93.2518889 C56.2705087,90.9911839 57.4137019,88.0367175 57.4137019,84.6224018 C57.4137019,81.1602404 56.3988533,78.0688824 53.9880917,75.5755946 C51.8750368,73.4079228 49.3809174,72.6237864 45.4935313,72.6237864 L45.4935313,72.6237864 Z M57.1583358,35.9806955 L53.0592473,35.9806955 L53.0592473,51.9956839 L44.0142605,51.9956839 L44.0142605,38.3344337 L39.9561894,38.3344337 L39.9561894,51.9956839 L31.1639224,51.9956839 L31.1639224,35.9806955 L27.0635107,35.9806955 L27.0635107,56.9796015 L57.1583358,56.9796015 L57.1583358,35.9806955 Z"
                                              id="Fill-2"></path>
                                        <path d="M210.343575,33.918284 C227.773302,51.8564 235.309909,78.8134133 232.736401,114.007845 L232.724493,114.298906 C232.720523,114.491618 232.324904,133.740172 222.336519,153.019294 C209.206998,178.364176 186.295501,191.96429 154.231844,193.444846 C152.949721,193.444846 151.703323,193.444846 150.456924,193.446175 C149.874743,193.43953 149.387827,193.442188 148.968392,193.446175 C138.790797,193.448833 129.878124,193.459465 122.096736,193.476743 L84.245663,193.476743 L84.245663,9.78549071 L147.757718,9.78549071 L147.99456,9.77884549 C148.36504,9.76156791 185.405028,8.25177315 210.343575,33.918284 L210.343575,33.918284 Z M210.477213,227.444467 C227.859306,245.385241 235.368127,272.309028 232.801235,307.448969 L232.788004,307.746676 C232.78668,307.9354 232.44531,326.875616 222.553514,346.15208 C209.446486,371.694989 186.468833,385.400098 154.250368,386.887299 C130.342546,386.887299 106.064246,386.928499 84.245663,386.984319 L84.245663,203.437933 C89.9655984,203.363506 100.997942,203.273131 122.157601,203.227944 L147.773596,203.227944 L148.005146,203.222628 C148.378271,203.203815 185.6207,201.787259 210.477213,227.444467 L210.477213,227.444467 Z M9.7396354,9.78549071 L74.537783,9.78549071 L74.537783,387.009571 C43.7655101,387.095959 19.1947956,387.203612 9.70920318,387.24747 L9.7396354,9.78549071 Z M147.649221,0.0356189453 L5.07821229,0.0356189453 L5.07821229,0.0356189453 L0.0330785063,0.0356189453 L0,397 L9.70920318,397 C10.4660394,396.992026 82.0426345,396.6385 154.361511,396.6385 L154.579829,396.633184 C199.421053,394.601074 220.985592,370.489546 231.183034,350.618999 C241.729785,330.065323 242.445604,310.17484 242.490591,308.028433 C242.830638,303.347538 243,298.803534 243,294.38446 C243,262.898063 234.399588,238.106063 217.357542,220.564003 C206.29212,209.175419 193.324022,202.55146 181.581153,198.703876 C208.556013,190.437218 223.244193,172.541631 231.124816,157.176546 C241.666275,136.62287 242.38077,116.736374 242.42708,114.587309 C242.765804,109.907743 242.935166,105.359752 242.935166,100.942007 C242.935166,69.4449773 234.333431,44.6489907 217.290062,27.10693 C189.836225,-1.14855986 150.659365,-0.0906402993 147.649221,0.0356189453 L147.649221,0.0356189453 Z"
                                              id="Fill-4"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="col-sm-12 col-lg-6 column_right header_right offset-lg-6">
                    <div class="content">
                        <?php if ($header_content = get_field('header_content')) : ?>
                            <?php echo $header_content; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="wonen">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6 column_left"
                     style="background-image: url(<?php echo esc_url(get_field('w_img_left')); ?>)">
                    <div class="content">
                        <?php if ($tekst_over_afbeelding = get_field('tekst_over_afbeelding')) : ?>
                            <h2><?php echo esc_html($tekst_over_afbeelding); ?></h2>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="offset-lg-6"></div>
                <div class="col-sm-12 col-lg-8 column_right d-none d-md-block"
                     style="background-image: url(<?php echo esc_url(get_field('w_img_right')); ?>)">
                </div>
                <div class="row after_images">
                    <div class="col-sm-12 col-lg-6">
                        <h3>
                            <?php if ($title_under = get_field('title_under')) : ?>
                                <?php echo esc_html($title_under); ?>
                            <?php endif; ?>
                        </h3>
                    </div>
                    <div class="col-sm-12 col-lg-6 appartments">
                        <p>
                            <?php if ($text_under = get_field('text_under')) : ?>
                                <?php echo $text_under; ?>
                            <?php endif; ?>
                        </p>
                    </div>
                    <div class="col-sm-12 column_right d-block d-md-none"
                         style="background-image: url(<?php echo esc_url(get_field('w_img_right')); ?>)">
                    </div>
                </div>
                <div class="row wonen_content">
                    <div class="col-sm-12">
                        <?php if ($wonen_content = get_field('wonen_content')) : ?>
                            <?php echo $wonen_content; ?>
                        <?php endif; ?>

                        <?php
                        $link = get_field('w_button_link');
                        if ($link) : ?>
                            <a class="btn btn_green"
                               href="<?php echo esc_url($link); ?>"><?php the_field('w_button_text'); ?></a>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="kantoor">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6 column_left"
                     style="background-image: url(<?php echo esc_url(get_field('k_img_left')); ?>)">

                </div>
                <div class="col-sm-12 col-lg-6 column_left_text">
                    <div class="content">
                        <?php if ($k_text_over_img = get_field('k_text_over_img')) : ?>
                            <h2><?php echo esc_html($k_text_over_img); ?></h2>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 column_right d-none d-md-block"
                     style="background-image: url(<?php echo esc_url(get_field('k_img_right')); ?>)">
                </div>
            </div>
            <div class="row after_images">
                <div class="col-sm-12 col-lg-6">
                    <h3>
                        <?php if ($title_under = get_field('k_title_under')) : ?>
                            <?php echo esc_html($title_under); ?>
                        <?php endif; ?>
                    </h3>
                </div>
                <div class="col-sm-12 col-lg-6 appartments">
                    <p>
                        <?php if ($text_under = get_field('k_text_under')) : ?>
                            <?php echo $text_under; ?>
                        <?php endif; ?>
                    </p>
                </div>
                <div class="col-sm-12 column_right d-block none d-md-none"
                     style="background-image: url(<?php echo esc_url(get_field('k_img_right')); ?>)">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 under_content">
                    <?php if ($kantoor_content = get_field('kantoor_content')) : ?>
                        <?php echo $kantoor_content; ?>
                    <?php endif; ?>

                    <?php
                    $link = get_field('k_button_link');
                    if ($link) : ?>
                        <a class="btn btn_brown"
                           href="<?php echo esc_url($link); ?>"><?php the_field('k_button_text'); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section id="voorzieningen">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6 column_left">
                    <h2 class="text-center text-md-left"><?php the_field('v_title'); ?></h2>
                    <?php if (have_rows('voorzieningen_slider')) : ?>
                        <div class="voorzieningen_text_slider d-none d-md-block">
                            <?php while (have_rows('voorzieningen_slider')) :
                                the_row(); ?>
                                <div>
                                    <p class="title">
                                        <?php if ($naam = get_sub_field('naam')) : ?>
                                            <?php echo esc_html($naam); ?>
                                        <?php endif; ?>
                                    </p>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                    <div class="content d-none d-md-block">
                        <?php if ($voorzieningen_content = get_field('voorzieningen_content')) : ?>
                            <?php echo $voorzieningen_content; ?>
                        <?php endif; ?>
                    </div>
                    <div class="arrows d-none d-md-block">
                        <a class="prev_voorziening_slide"><i class="fal fa-angle-left"></i></a>
                        <a class="next_voorziening_slide"><i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 column_right px-0">
                    <?php if (have_rows('voorzieningen_slider')) : ?>
                    <div class="voorzieningen_slider">
                        <?php while (have_rows('voorzieningen_slider')) :
                            the_row(); ?>
                        <div>
                            <?= !empty($img = get_sub_field('slide_img')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => 'class_name']) : '' ?>
                            <p class="title d-block d-md-none">
                                <?php if ($naam = get_sub_field('naam')) : ?>
                                    <?php echo esc_html($naam); ?>
                                <?php endif; ?>
                            </p>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
                    <div class="content d-block d-md-none">
                        <?php if ($voorzieningen_content = get_field('voorzieningen_content')) : ?>
                            <?php echo $voorzieningen_content; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
    </section>

    <section id="locatie">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6 column_left">
                    <?php if ($l_content_left = get_field('l_content_left')) : ?>
                        <?php echo $l_content_left; ?>
                    <?php endif; ?>
                </div>
                <div class="col-sm-12 col-lg-6 column_right">
                    <div class="content">
                        <?php if ($l_content_right = get_field('l_content_right')) : ?>
                            <?php echo $l_content_right; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="container map_block">
        <div class="row">
            <div id="map"></div>

            <div class="map_details">
                <div class="row">

                    <div class="col-sm-12 col-lg-3">
                        <?php if (have_rows('map_details_train')) : ?>
                            <?php while (have_rows('map_details_train')) :
                                the_row(); ?>
                                <div class="detail_block d-flex align-items-center">
                                    <p class="detail"><?php the_sub_field('detail'); ?></p>
                                    <img class="icon"
                                         src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/ov.svg" alt="ov">
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="offset-lg-1"></div>
                    <div class="col-sm-12 col-lg-3">
                        <?php if (have_rows('map_details_car')) : ?>
                            <?php while (have_rows('map_details_car')) :
                                the_row(); ?>
                                <div class="detail_block d-flex align-items-center">
                                    <p class="detail"><?php the_sub_field('detail'); ?></p>
                                    <img class="icon"
                                         src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/car.svg"
                                         alt="car"></div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="offset-lg-1"></div>
                    <div class="col-sm-12 col-lg-3">
                        <?php if (have_rows('map_details_bike')) : ?>
                            <?php while (have_rows('map_details_bike')) :
                                the_row(); ?>
                                <div class="detail_block d-flex align-items-center">
                                    <p class="detail"><?php the_sub_field('detail'); ?></p>
                                    <img class="icon"
                                         src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/bike.svg"
                                         alt="bike"></div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <section id="hotspots">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 px-0 position-relative column_left">
                    <h3 class="title"><?php the_field('h_title'); ?></h3>
                    <div class="hotspot_slider">
                        <?php if (have_rows('hotspot_slider')) : ?>
                            <?php while (have_rows('hotspot_slider')) :
                                the_row(); ?>

                                <?= !empty($img = get_sub_field('slide_img')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => 'class_name']) : '' ?>


                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-2 offset-lg-10 arrow_row d-none d-md-flex">
                    <div class="arrows">
                        <a class="prev_hotpot_slide"><i class="fal fa-angle-left"></i></a>
                        <a class="next_hotspot_slide"><i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="planning">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3><?php the_field('p_title'); ?></h3>
                    <div class="steps_block row">
                        <img class="side_logo"
                             src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/thebridge-logo.svg"
                             alt="Bridge logo">
                        <?php if (have_rows('steps')) : ?>
                            <?php while (have_rows('steps')) :
                                the_row(); ?>
                                <div class="col-sm-12 col-md-6 step">
                                    <?= !empty($img = get_sub_field('icon')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => 'icon']) : '' ?>
                                    <p><?php the_sub_field('titel'); ?></p>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="aanmelden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-lg-3">
                    <h3><?php the_field('m_title'); ?></h3>
                </div>
                <div class="col-sm-12 col-lg-6 ">
                    <p><?php the_field('m_content'); ?></p>
                </div>
                <div class="col-sm-12 col-lg-3 text-lg-right">
                    <?php
                    $link = get_field('m_button_link');
                    if ($link) : ?>
                        <a class="btn btn_green"
                           href="<?php echo esc_url($link); ?>"><?php the_field('m_button_text'); ?></a>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>




<?php
$map_position = get_field('maps_position_center');
$map_zoom = get_field('maps_zoom_position');
?>
    <script>
        let map;
        let markers = [];  // Create a global variable for the markers.
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: <?php echo $map_zoom; ?>,
                center: new google.maps.LatLng(<?php echo $map_position['lat']; ?>, <?php echo $map_position['lng']; ?>),
                mapTypeId: 'roadmap',
                scaleControl: false,
                draggable: true,
                mapTypeControl: false,
                streetViewControl: false,
                zoomControl: true,
                zoomControlOptions: {
                    position: google.maps.ControlPosition.TOP_RIGHT,
                },

                styles: [
                    {
                        "featureType": "administrative",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "stylers": [
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "stylers": [
                            {
                                "color": "#84afa3"
                            },
                            {
                                "lightness": 52
                            }
                        ]
                    },
                    {
                        "stylers": [
                            {
                                "saturation": -77
                            }
                        ]
                    },
                    {
                        "featureType": "road"
                    }
                ]
            });

            // Add the markers from the marker array.
            function addMarker(feature) {
                var marker = new google.maps.Marker({
                    position: feature.position,
                    icon: features[i].icon,
                    title: features[i].name,
                    map: map
                });
                markers.push({
                    marker: marker,
                    type: feature.type
                });
            }

            // Marker array
            let features = [
                {
                    position: new google.maps.LatLng(<?php echo $map_position['lat']; ?>, <?php echo $map_position['lng']; ?>),
                    icon: '<?php echo get_template_directory_uri(); ?>/assets/svg/bridge-pointer.svg',
                    windowcontent: '<div class="marker"><span class="map_title">The Bridge</span></div>',
                    type: "food"
                },

                // Loop for points
                <?php

                $pointers = get_field('maps_pointers');
                foreach( $pointers as $pointer ) {
                ?>
                {
                    position: new google.maps.LatLng(<?php echo $pointer['pointer_position']['lat'] ?>, <?php echo $pointer['pointer_position']['lng']; ?>),
                    icon: '<?php echo $pointer['pointer_image']['url'] ?>',
                    windowcontent: '<div class="marker"><span class="map_title"><?php echo $pointer['pointer_naam']; ?></span></div>',
                    type: '<?php echo $pointer['pointer_category'] ?>'
                },
                <?php } ?>


            ];

            // Itterate through through the markers and add them to the map.
            for (var i = 0, feature; feature === features[i]; i++) {
                addMarker(feature);
            }

            var prev_infowindow = false;

            // Create markers.
            features.forEach(function (feature) {
                let marker = new google.maps.Marker({
                    position: feature.position,
                    icon: feature.icon,
                    map: map
                });
                markers.push({
                    marker: marker,
                    type: feature.type
                });

                let infowindow = new google.maps.InfoWindow({
                    content: feature.windowcontent
                });

                marker.addListener('mouseover', function () {
                    if (prev_infowindow) {
                        prev_infowindow.close();
                    }
                    prev_infowindow = infowindow;
                    infowindow.open(map, marker);
                });

                // assuming you also want to hide the infowindow when user mouses-out
                marker.addListener('mouseout', function () {
                    infowindow.close();
                });
            })


        }

        /**
         * Function to filter markers by category
         */
        filterMarkers = function (type) {
            for (i = 0; i < markers.length; i++) {
                marker = markers[i];
                // If is same category or category not picked
                if (markers[i].type === type) {
                    markers[i].marker.setVisible(true);
                }
                // Categories don't match
                else {
                    markers[i].marker.setVisible(false);
                }
            }
        }

        var google;
        // Load and initialize the page.

    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2vmgrEH5t14PQY_A2Uwz23ww4ZUjq9iY&callback=initMap"></script>

<?php
get_footer();

