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


    <section id="header">
        <div class="container h-100">
            <div class="row position-relative" data-aos="fade-up">
                <img class="leaf_background"
                     src="<?php echo get_template_directory_uri(); ?>/assets/images/leaf-rounded.png"
                     alt="Leaf">
            </div>
            <div class="row h-100">
                <div class="col-sm-12 col-lg-5 column_left d-flex align-items-center px-lg-0">
                    <div class="content" data-aos="fade-up">
                        <?php if ($content = get_field('header_text')) : ?>
                            <?php echo $content; ?>
                        <?php endif; ?>
                        <?php
                        $link = get_field('header_button_link');
                        if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="btn btn_gray" href="<?php echo esc_url($link_url); ?>"
                               target="<?php echo esc_attr($link_target); ?>"><?php the_field('header_button_tekst'); ?>
                                <i class="fal fa-long-arrow-right"></i></a>
                        <?php endif; ?>
                    </div>

                </div>
                <div class="col-sm-12 col-lg-7 column_right px-0" data-aos="fade-left">
                    <video class="header_image" poster="<?php echo get_template_directory_uri(); ?>/assets/homepage-assets/cornelis-video-poster.png" playsinline muted autoplay loop>
                        <source src="<?php echo get_template_directory_uri(); ?>/assets/homepage-assets/cornelis_header_video_new.mp4"
                                type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <img class="wood"
                         src="<?php echo get_template_directory_uri(); ?>/assets/homepage-assets/stroke.jpg"
                         alt="Wood">
                    <img class="leaf"
                         src="<?php echo get_template_directory_uri(); ?>/assets/homepage-assets/side-img.jpg"
                         alt="Leafs">
                    <div class="d-none">
                        <?php if (have_rows('header_slider')) : ?>
                            <div class="header_slider">
                                <?php while (have_rows('header_slider')) :
                                    the_row(); ?>

                                    <div class="slide">
                                        <?= !empty($img = get_sub_field('slide_img')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => 'class_name', 'loading' => 'lazy']) : '' ?>

                                    </div>

                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                        <div class="arrow">
                            <a class="next_header_slide"><i class="fas fa-chevron-right"></i></a>
                        </div>
                        <img class="wood"
                             src="<?php echo get_template_directory_uri(); ?>/assets/homepage-assets/wood.jpg"
                             alt="Wood">
                        <img class="leaf"
                             src="<?php echo get_template_directory_uri(); ?>/assets/images/blad.jpg"
                             alt="Leafs">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="unique">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mb-4 mb-lg-3 pl-lg-0">
                    <?php if ($u_title = get_field('u_title')) : ?>
                        <h2><?php echo esc_html($u_title); ?></h2>
                    <?php endif; ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 mb-5 mb-lg-0 blocks pl-lg-0" data-aos="fade-up">
                    <?php if (have_rows('kolom_1')) : ?>
                        <?php while (have_rows('kolom_1')) :
                            the_row(); ?>

                            <?php if ($boven = get_sub_field('boven')) : ?>
                            <p class="up"><?php echo esc_html($boven); ?></p>
                        <?php endif; ?>

                            <?php if ($midden = get_sub_field('midden')) : ?>
                            <p class="middle"><?php echo esc_html($midden); ?></p>
                        <?php endif; ?>

                            <?php if ($onder = get_sub_field('onder')) : ?>
                            <p class="bottom"><?php echo esc_html($onder); ?></p>
                        <?php endif; ?>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 mb-5 mb-lg-0 blocks" data-aos="fade-up" data-aos-delay="300">
                    <?php if (have_rows('kolom_2')) : ?>
                        <?php while (have_rows('kolom_2')) :
                            the_row(); ?>

                            <?php if ($boven = get_sub_field('boven')) : ?>
                            <p class="up"><?php echo esc_html($boven); ?></p>
                        <?php endif; ?>

                            <?php if ($midden = get_sub_field('midden')) : ?>
                            <p class="middle"><?php echo esc_html($midden); ?></p>
                        <?php endif; ?>

                            <?php if ($onder = get_sub_field('onder')) : ?>
                            <p class="bottom"><?php echo esc_html($onder); ?></p>
                        <?php endif; ?>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 mb-5 mb-lg-0 blocks" data-aos="fade-up" data-aos-delay="600">
                    <?php if (have_rows('kolom_3')) : ?>
                        <?php while (have_rows('kolom_3')) :
                            the_row(); ?>

                            <?php if ($boven = get_sub_field('boven')) : ?>
                            <p class="up"><?php echo esc_html($boven); ?></p>
                        <?php endif; ?>

                            <?php if ($midden = get_sub_field('midden')) : ?>
                            <p class="middle"><?php echo esc_html($midden); ?></p>
                        <?php endif; ?>

                            <?php if ($onder = get_sub_field('onder')) : ?>
                            <p class="bottom"><?php echo esc_html($onder); ?></p>
                        <?php endif; ?>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 mb-5 mb-lg-0 blocks" data-aos="fade-up" data-aos-delay="900">
                    <?php if (have_rows('kolom_4')) : ?>
                        <?php while (have_rows('kolom_4')) :
                            the_row(); ?>

                            <?php if ($boven = get_sub_field('boven')) : ?>
                            <p class="up"><?php echo esc_html($boven); ?></p>
                        <?php endif; ?>

                            <?php if ($midden = get_sub_field('midden')) : ?>
                            <p class="middle"><?php echo esc_html($midden); ?></p>
                        <?php endif; ?>

                            <?php if ($onder = get_sub_field('onder')) : ?>
                            <p class="bottom"><?php echo esc_html($onder); ?></p>
                        <?php endif; ?>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section id="appartementen">
        <div class="container">
            <div class="row first_row">
                <div class="col-sm-12 col-lg-4 col_left pl-lg-0" data-aos="fade-down">
                    <?php if ($a_titel = get_field('a_titel')) : ?>
                        <?php echo $a_titel; ?>
                    <?php endif; ?>
                </div>
                <div class="col-sm-12 col-lg-6 offset-lg-2 col_right d-flex align-items-end pr-lg-0"
                     data-aos="fade-left">
                    <?php if ($a_content = get_field('a_content')) : ?>
                        <?php echo $a_content; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row second_row" data-aos="fade-up">
                <div class="col-sm-12">
                    <div class="impression_slider">
                        <?php
                        $afbeelding_slider = get_field('afbeelding_slider');
                        if ($afbeelding_slider) : ?>
                            <?php foreach ($afbeelding_slider as $image) : ?>
                                <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                                     alt="<?php echo esc_attr($image['alt']); ?>"/>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="row third_row">
                <div class="col-sm-12 px-0" data-aos="fade-up">
                    <?php if ($a_content_2 = get_field('a_content_2')) : ?>
                        <?php echo $a_content_2; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>


<?php get_template_part('partials/apartments', 'content'); ?>

    <section id="gevelpark">
        <div class="container">
            <div class="row first_row">
                <div class="col-sm-12 col-lg-6 col_left"
                     style="background-image:url(<?php echo esc_url(get_field('g_img_left')); ?>);"
                     data-aos="fade-right">

                </div>
                <div class="col-sm-12 col-lg-5 offset-lg-7 col_right" data-aos="fade-up">
                    <?php if ($titel = get_field('titel')) : ?>
                        <?php echo $titel; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row second_row">
                <div class="col-sm-12 col-lg-6 col_left" data-aos="fade-left">
                    <?php if ($g_content_left = get_field('g_content_left')) : ?>
                        <?php echo $g_content_left; ?>
                    <?php endif; ?>
                </div>
                <div class="col-sm-12 col-lg-5 offset-lg-1 col_right" data-aos="fade-up">
                    <?= !empty($img = get_field('g_img_right')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => 'leaf_image', 'loading' => 'lazy']) : '' ?>

                </div>
            </div>
        </div>
    </section>


    <section id="voorzieningen">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-4 col_left pl-lg-0" data-aos="fade-right">
                    <?php if ($v_content = get_field('v_content')) : ?>
                        <?php echo $v_content; ?>
                    <?php endif; ?>
                </div>

                <div class="col-sm-12 col-lg-7 col_right" data-aos="fade-up">
                    <div class="slide_box">
                        <?php if (have_rows('voorzieningen_slider')) : ?>
                            <div class="voorzieningen_slider">
                                <?php while (have_rows('voorzieningen_slider')) :
                                    the_row(); ?>

                                    <?= !empty($img = get_sub_field('slide_img')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => 'slide_img', 'loading' => 'lazy']) : '' ?>

                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                        <div class="arrows">
                            <a class="prev_voorzieningen_slide"><i class="far fa-chevron-left"></i></a>
                            <a class="next_voorzieningen_slide"><i class="far fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="energy">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <?= !empty($img = get_field('energy_img')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => '', 'loading' => 'lazy']) : '' ?>

                </div>
                <div class="col-12 col-lg-4 col_right">
                    <div class="content">
                        <h2><?php the_field('energy_title'); ?></h2>
                        <?php if ($subtitle = get_field('energy_subtitle')) : ?>
                            <p class="subtitle"><?= $subtitle ?></p>
                        <?php endif; ?>
                        <?php the_field('energy_content'); ?>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section id="locatie">
        <div class="wooden_background">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-5" data-aos="fade-right">
                        <?php if ($l_content = get_field('l_content')) : ?>
                            <?php echo $l_content; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container maps_block" data-aos="fade-up">
            <div class="row">
                <div class="col-sm-12 col-lg-10 offset-lg-2">
                    <a href="https://www.google.com/maps/dir//52.3577537,4.8404239/@52.35777,4.838927,16.55z/data=!4m2!4m1!3e0"
                       target="_blank">
                        <?= !empty($img = get_field('maps')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => 'maps', 'loading' => 'lazy']) : '' ?>
                    </a>
                </div>
            </div>
        </div>
        <?php if (have_rows('videos')) : ?>
            <div id="video_overview">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-5 col_left">
                            <?php if ($title = get_field('video_title')) : ?>
                                <h2><?= $title ?></h2>
                            <?php endif; ?>

                        </div>
                        <div class="col-sm-12 col-lg-6 offset-lg-1 col_right">
                            <?php if ($content = get_field('video_content')) : ?>
                                <p><?= $content ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-12 video_col">

                            <div class="video_overview row">
                                <?php
                                $x = 1;
                                while (have_rows('videos')) :
                                    the_row();
                                    ?>

                                    <div class="col-sm-12 col-lg-4 slide">
                                        <div class="thumbnail_box thumbnail_<?= $x ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path d="M356.5 235.5C363.6 239.9 368 247.6 368 256C368 264.4 363.6 272.1 356.5 276.5L212.5 364.5C205.1 369 195.8 369.2 188.3 364.9C180.7 360.7 176 352.7 176 344V167.1C176 159.3 180.7 151.3 188.3 147.1C195.8 142.8 205.1 142.1 212.5 147.5L356.5 235.5zM192 168V344C192 346.9 193.6 349.6 196.1 350.1C198.6 352.4 201.7 352.3 204.2 350.8L348.2 262.8C350.6 261.4 352 258.8 352 256C352 253.2 350.6 250.6 348.2 249.2L204.2 161.2C201.7 159.7 198.6 159.6 196.1 161C193.6 162.4 192 165.1 192 168V168zM0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM256 496C388.5 496 496 388.5 496 256C496 123.5 388.5 16 256 16C123.5 16 16 123.5 16 256C16 388.5 123.5 496 256 496z"/>
                                            </svg>
                                            <?= !empty($img = get_sub_field('thumbnail')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => 'thumbnail', 'loading' => 'lazy']) : '' ?>
                                        </div>
                                        <p class="subtitle"><?php the_sub_field('subtitle'); ?></p>
                                        <p class="title"><?php the_sub_field('title'); ?></p>
                                        <script>
                                            $(".thumbnail_<?= $x ?>").click(function () {
                                                $(".video_<?= $x ?>").addClass("active");
                                                $("body, html").addClass("no-scroll");
                                            });
                                        </script>
                                    </div>


                                    <?php
                                    $x++;
                                endwhile;
                                ?>

                            </div>
                            <?php
                            $x = 1;
                            while (have_rows('videos')) :
                                the_row();
                                ?>

                                <div class="video-container video_<?= $x ?>">
                                    <a class="close_video">X</a>
                                    <?php the_sub_field('video_url'); ?>
                                </div>

                                <?php
                                $x++;
                            endwhile;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-sm-12 position-relative" data-aos="fade-down">
                <div class="locatie_slider">
                    <?php if (have_rows('locatie_slider')) : ?>
                        <?php while (have_rows('locatie_slider')) :
                            the_row(); ?>
                            <div class="slide">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <?= !empty($img = get_sub_field('slide')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => 'slide', 'loading' => 'lazy']) : '' ?>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 d-xl-flex justify-content-center ">
                                        <div class="content">
                                            <?php if ($content = get_sub_field('content')) : ?>
                                                <?php echo $content; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="arrows">
                    <a class="prev_locatie_slide"><i class="far fa-chevron-left"></i></a>
                    <a class="next_locatie_slide"><i class="far fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section id="actueel">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 px-lg-0 position-relative">
                    <div class="actueel_slider">
                        <?php if (have_rows('actuele_slider')) : ?>
                            <?php while (have_rows('actuele_slider')) :
                                the_row(); ?>
                                <div class="slide">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6 px-lg-0 d-flex justify-content-start">
                                            <div class="content">
                                                <p class="title">ACTUEEL</p>
                                                <?php if ($content = get_sub_field('content')) : ?>
                                                    <?php echo $content; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6 px-lg-0">
                                            <?= !empty($img = get_sub_field('img')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => 'slide', 'loading' => 'lazy']) : '' ?>
                                        </div>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="arrows">
                        <a class="prev_actuele_slide"><i class="far fa-chevron-left"></i></a>
                        <a class="next_actuele_slide"><i class="far fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php if ($button_tekst = get_field('f_button')) : ?>
    <section id="faq_downloads" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6 col_left">
                    <h3 class="h1"><?php the_field('f_title'); ?></h3>
                    <p><?php the_field('f_content'); ?></p>
                </div>
                <div class="col-sm-12 col-lg-6 col_right">
                    <a class="downloads btn btn_gray"><?= $button_tekst ?> <i
                                class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6 px-lg-0" data-aos="fade-up">
                    <div class="block">
                        <?= !empty($img = get_field('c_img_left')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => 'slide', 'loading' => 'lazy']) : '' ?>
                        <div class="content">
                            <?php if ($text_over_img = get_field('text_over_img')) : ?>
                                <?php echo $text_over_img; ?>
                            <?php endif; ?>

                            <svg viewBox="0 0 344 37" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>CORNELIS</title>
                                <defs>
                                    <polygon id="path-1" points="0 0 344 0 344 37 0 37"></polygon>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Home-Cornelis" transform="translate(-145.000000, -53.000000)">
                                        <g id="Group-3" transform="translate(145.000000, 53.000000)">
                                            <mask id="mask-2" fill="white">
                                                <use xlink:href="#path-1"></use>
                                            </mask>
                                            <g id="Clip-2"></g>
                                            <path d="M18.2920166,36.9487472 C21.7447996,36.9487472 24.6300797,36.381549 26.8966794,35.2460137 C29.1644164,34.1104784 31.2251683,32.5626424 32.9777172,30.5501139 L27.67003,25.1833713 C25.3511155,28.0728929 22.3111652,29.5694761 18.5501792,29.5694761 C15.7160766,29.5694761 13.3971621,28.4851936 11.5934355,26.4214123 C9.73853132,24.3063781 8.81051059,21.7255125 8.81051059,18.6810934 C8.81051059,15.6366743 9.73853132,13.1082005 11.5934355,11.0432802 C13.4483397,8.92824601 15.7672543,7.89635535 18.5501792,7.89635535 C21.8471548,7.89635535 24.8359275,9.3405467 27.4641823,12.1275626 L32.7195546,6.03758542 C31.122813,4.38724374 29.215594,3.04555809 27.0001719,2.06492027 C24.7847499,1.03302961 21.9506473,0.51594533 18.6013568,0.51594533 C13.0366442,0.51594533 8.55348524,2.32232346 5.15187982,5.93507973 C1.70023407,9.49544419 0,13.7790433 0,18.784738 C0,23.8416856 1.70023407,28.1241458 5.15187982,31.6332574 C8.60466285,35.1947608 12.9843293,36.9487472 18.2920166,36.9487472 L18.2920166,36.9487472 Z M66.2283818,29.5694761 C64.785173,29.5694761 63.4454568,29.3109339 62.2092331,28.7437358 C60.9718721,28.2277904 59.8903186,27.453303 58.9622978,26.4726651 C58.0354144,25.4931663 57.3132414,24.3063781 56.7980534,23.0159453 C56.2828654,21.6742597 56.0258401,20.2289294 56.0258401,18.7323462 L56.0258401,18.6298405 C56.0258401,17.0808656 56.2828654,15.6879271 56.7980534,14.3462415 C57.3132414,13.0558087 58.0354144,11.9214123 58.9622978,10.9407745 C59.839141,9.96013667 60.8695169,9.1856492 62.1057406,8.66970387 C63.3431016,8.10250569 64.6828178,7.84396355 66.1248892,7.84396355 C67.568098,7.84396355 68.9078142,8.10250569 70.1440379,8.66970387 C71.3813989,9.238041 72.4629524,10.0113895 73.3909732,10.9920273 C74.3178566,11.9726651 75.0388923,13.1082005 75.5552176,14.4498861 C76.0704056,15.7915718 76.3274309,17.1845103 76.3274309,18.7323462 L76.3274309,18.8359909 C76.3274309,20.332574 76.0704056,21.7255125 75.5552176,23.0671982 C75.0388923,24.4088838 74.3690342,25.5444191 73.4421508,26.5250569 C72.5664449,27.5056948 71.4837541,28.2277904 70.2475304,28.7949886 C69.0101694,29.3109339 67.6704532,29.5694761 66.2283818,29.5694761 L66.2283818,29.5694761 Z M66.1248892,37 C68.9589918,37 71.4837541,36.5364465 73.8538463,35.5558087 C76.2250757,34.5751708 78.23465,33.2334852 79.8825692,31.5820046 C81.5839405,29.8792711 82.8713419,27.9179954 83.8505402,25.7505695 C84.7785609,23.5318907 85.241434,21.2095672 85.241434,18.7323462 L85.241434,18.6298405 C85.241434,16.1013667 84.7785609,13.7790433 83.8505402,11.5592255 C82.9236568,9.39179954 81.6351182,7.48291572 79.9348841,5.83143508 C78.2858276,4.17995444 76.2762533,2.83826879 73.9573388,1.85763098 C71.5872466,0.878132118 69.0624843,0.413439636 66.2283818,0.413439636 C63.4454568,0.413439636 60.8695169,0.878132118 58.5506024,1.85763098 C56.1805102,2.83826879 54.1709359,4.17995444 52.4695645,5.88382688 C50.8216454,7.53416856 49.4819291,9.49544419 48.5539084,11.6628702 C47.627025,13.881549 47.1630146,16.2038724 47.1630146,18.7323462 L47.1630146,18.8359909 C47.1630146,21.3132118 47.627025,23.6355353 48.5539084,25.8542141 C49.4819291,28.0216401 50.7693305,29.9817768 52.4183869,31.5820046 C54.118621,33.2334852 56.1281953,34.5751708 58.4471099,35.5558087 C60.817202,36.5364465 63.3431016,37 66.1248892,37 L66.1248892,37 Z M134.28551,36.9487472 L125.422685,23.9441913 C130.524524,22.2938497 133.100464,18.5261959 133.100464,12.5922551 C133.100464,9.1856492 132.070088,6.45102506 130.009336,4.33485194 C127.484574,1.80637813 123.825943,0.51594533 119.084622,0.51594533 L102.183499,0.51594533 L102.183499,36.9487472 L110.943969,36.9487472 L110.943969,7.99886105 L118.414763,7.99886105 C122.331557,8.0501139 124.237639,9.75398633 124.237639,13.1082005 C124.082969,16.4100228 122.176887,18.0615034 118.569434,18.0615034 L111.406842,18.0615034 L124.237639,36.9487472 L134.28551,36.9487472 Z M183.761753,37 L183.761753,0.51594533 L175.053598,0.51594533 L175.053598,21.88041 L158.822333,0.51594533 L150.835213,0.51594533 L150.835213,37 L159.492191,37 L159.492191,14.9134396 L176.289821,37 L183.761753,37 Z M201.852471,7.9476082 L229.884156,7.9476082 L229.884156,0.56833713 L201.852471,0.56833713 L201.852471,7.9476082 Z M209.736098,29.5694761 L209.736098,22.4476082 L219.372274,22.4476082 L219.372274,15.0683371 L201.852471,15.0683371 L201.852471,36.9487472 L229.884156,36.9487472 L229.884156,29.5694761 L209.736098,29.5694761 Z M274.073183,37 L274.073183,29.4658314 L256.038191,29.4658314 L256.038191,0.51594533 L247.278858,0.51594533 L247.278858,37 L274.073183,37 Z M289.710787,36.9487472 L298.47012,36.9487472 L298.47012,0.51594533 L289.710787,0.51594533 L289.710787,36.9487472 Z M330.55166,36.9487472 C332.510057,36.9487472 334.364961,36.690205 336.014018,36.1742597 C337.663074,35.6583144 339.105146,34.9362187 340.290192,33.9555809 C341.475238,32.9749431 342.403258,31.8394077 343.021939,30.4464692 C343.691797,29.0535308 344,27.5056948 344,25.7505695 L344,25.6480638 C344,24.0990888 343.742975,22.7574032 343.278964,21.6230068 C342.763776,20.4874715 342.042741,19.5068337 341.012365,18.6298405 C340.033166,17.8041002 338.795805,17.0808656 337.353734,16.4624146 C335.910525,15.8428246 334.313784,15.3268793 332.457742,14.8109339 C330.964493,14.3974943 329.727132,14.0888383 328.747934,13.7790433 C327.768735,13.4692483 326.996522,13.1594533 326.481334,12.8496583 C325.966146,12.5398633 325.604491,12.1788155 325.398643,11.7665148 C325.141618,11.3530752 325.038125,10.8883827 325.038125,10.2699317 L325.038125,10.166287 C325.038125,9.28929385 325.398643,8.56719818 326.120816,8.0501139 C326.790674,7.48291572 327.82105,7.22551253 329.211944,7.22551253 C330.655153,7.22551253 332.097224,7.53416856 333.591611,8.15375854 C335.034819,8.72095672 336.735053,9.70159453 338.589958,10.9407745 L342.918446,4.69589977 C341.012365,3.14806378 338.950475,2.01252847 336.683876,1.18678815 C334.468454,0.413439636 331.994869,0 329.315437,0 C327.408218,0 325.656806,0.258542141 324.111242,0.774487472 C322.513363,1.34168565 321.122469,2.06492027 319.988601,3.04555809 C318.854732,4.02505695 317.979026,5.16059226 317.360346,6.5022779 C316.79398,7.79271071 316.48464,9.28929385 316.48464,10.8883827 L316.48464,10.9920273 C316.48464,12.7471526 316.742803,14.191344 317.309168,15.4305239 C317.875534,16.6173121 318.700062,17.5968109 319.730438,18.4225513 C320.761951,19.2482916 322.049353,19.9715262 323.543739,20.4874715 C325.038125,21.0546697 326.687182,21.570615 328.490908,21.9840547 C329.985295,22.3963554 331.170341,22.7061503 332.046047,23.0671982 C332.974067,23.3769932 333.643925,23.6867882 334.159113,23.9965831 C334.621987,24.3063781 334.931327,24.667426 335.138312,25.0284738 C335.291845,25.4407745 335.395337,25.8542141 335.395337,26.4214123 L335.395337,26.5250569 C335.395337,27.5569476 334.983642,28.3314351 334.159113,28.8986333 C333.334585,29.4145786 332.200717,29.7243736 330.70633,29.7243736 C328.747934,29.7243736 326.945344,29.3109339 325.296288,28.5888383 C323.647232,27.8143508 321.894683,26.6799544 319.988601,25.1309795 L315.041431,31.0660592 C317.257991,33.0785877 319.679261,34.523918 322.358693,35.5034169 C325.038125,36.4328018 327.768735,36.9487472 330.55166,36.9487472 L330.55166,36.9487472 Z"
                                                  id="Fill-1" fill="#231F20" mask="url(#mask-2)"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 pr-lg-0 col_right">
                    <?php if ($content = get_field('content_+_formulier')) : ?>
                        <?php echo $content; ?>
                    <?php endif; ?>


                    <form id="register_form" action="<?php echo get_site_url(); ?>/#contact" method="POST">
                        <div style="display: none;">
                            <?php wp_nonce_field('form_intrest') ?>
                            <input type="hidden" name="_type" value="intrest_form"/>
                        </div>
                        <p><?= Form::show_messages() ?></p>
                        <div class="form-group">
                            <label for="first-name"></label>
                            <input type="text" class="form-control" name="name" id="first-name" required
                                   placeholder="<?= __('First name', 'cornelis') ?>">
                            <?= Form::get_field_errors('first-name') ?>
                        </div>
                        <div class="form-group">
                            <label for="last-name"></label>
                            <input type="text" class="form-control" name="lastname" id="last-name" required
                                   placeholder="<?= __('Last name', 'cornelis') ?>">
                            <?= Form::get_field_errors('last-name') ?>
                        </div>

                        <div class="form-group">
                            <label for="phone"></label><input type="tel" class="form-control" name="phone" id="phone"
                                                              required
                                                              placeholder="<?= __('Phone', 'cornelis') ?>">
                            <?= Form::get_field_errors('phone') ?>
                        </div>
                        <div class="form-group">
                            <label for="email"></label>
                            <input type="email" class="form-control" name="email" id="email" required
                                   placeholder="<?= __('E-mail', 'cornelis') ?>">
                            <?= Form::get_field_errors('email') ?>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="accept" id="accept" required>
                            <span class="checkmark"></span>
                            <label class="check-container"> <?= __('Please keep me informed of any new developments in the new building project Cornelis.', 'cornelis') ?>
                            </label>
                        </div>
                        <div class="g-recaptcha mb-4" data-sitekey="6Ldk_4gdAAAAAIp82Gd3o18w7DmdRv859GfozCgs"></div>
                        <button type="submit"
                                class="btn btn_form"><?= __('Sign up now', 'cornelis') ?><i
                                    class="fal fa-long-arrow-right"></i></button>
                    </form>
                    <script src="https://www.google.com/recaptcha/api.js"></script>

                </div>
            </div>
        </div>
    </section>

    <section id="makelaars" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3><?php the_field('m_title'); ?></h3>
                </div>
            </div>
            <div class="row makelaars_overzicht">
                <?php if (have_rows('makelaar')) : ?>
                    <?php while (have_rows('makelaar')) :
                        the_row(); ?>
                        <div class="col-6 col-md-6 col-lg-3 makelaar mb-5 mb-lg-2">
                            <?= !empty($img = get_sub_field('foto')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => 'foto', 'loading' => 'lazy']) : '' ?>
                            <p class="name"><?php the_sub_field('naam'); ?></p>
                            <p class="function"><?php the_sub_field('functie'); ?></p>
                            <p class="company"><?php the_sub_field('company'); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>


<?php
get_footer();


