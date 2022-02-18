<?php ?>

<section id="apartments">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="title"><?php the_field('a_title', 'options'); ?></h3>
            </div>
            <div class="col-sm-12 apartments_number_arrows">
                <div class="arrows d-lg-none">
                    <a class="prev_apartments_number_slide"><i class="far fa-chevron-left"></i></a>
                    <a class="next_apartments_number_slide"><i class="far fa-chevron-right"></i></a>
                </div>
                <?php if (have_rows('appartementen_slider', 'options')) : ?>
                    <div class="apartments_number_slider">
                        <?php while (have_rows('appartementen_slider', 'options')) :
                            the_row(); ?>
                            <div class="apartments_number_slide">
                                <?php if ($woningtype = get_sub_field('woningtype', 'options')) : ?>
                                    <h3 class="h2"><?php echo esc_html($woningtype); ?></h3>
                                <?php endif; ?>
                                <?php if ($woningen = get_sub_field('woningen', 'options')) : ?>
                                    <p class="woningen"><?php echo esc_html($woningen); ?></p>
                                <?php endif; ?>


                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-sm-12 apartments_slider_block">

                <?php if (have_rows('appartementen_slider', 'options')) : ?>
                    <div class="apartments_type_slider">
                        <?php
                        $x = 1;
                        while (have_rows('appartementen_slider', 'options')) :
                            the_row(); ?>
                            <div class="apartments_type_slide">
                                <?php if (have_rows('woningen_slider', 'options')) : ?>

                                    <div class="apartments_slider apartments_slider_<?php echo $x; ?>">
                                        <?php while (have_rows('woningen_slider', 'options')) :
                                            the_row(); ?>
                                            <div class="apartments_slide">

                                                <?= !empty($img = get_sub_field('woning_afbeelding')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => 'woning_img']) : '' ?>
                                                <p class="number"><?php the_sub_field('number'); ?></p>


                                                <div class="apartment_info">
                                                    <h4><?php the_sub_field('w_titel'); ?></h4>
                                                    <div class="details">
                                                        <p class="square_meters"><?php the_sub_field('square_meters'); ?></p>
                                                        <p class="info"><?php the_sub_field('info'); ?></p>
                                                        <p class="price"><?php the_sub_field('prijs'); ?></p>
                                                    </div>
                                                </div>
                                            </div>


                                        <?php endwhile; ?>
                                    </div>

                                <?php endif; ?>
                                <div class="arrows">
                                    <a class="prev_apartment_slide prev_apartment_slide_<?= $x; ?>"><i
                                                class="far fa-chevron-left"></i></a>
                                    <a class="next_apartment_slide next_apartment_slide_<?= $x; ?>"><i
                                                class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                            <?php
                            $x++;
                        endwhile; ?>

                    </div>


                <?php endif; ?>

            </div>
            <div class="col-sm-12 woning_button">
                <?php if ($woningzoeker_button_link = get_field('woningzoeker_button_link', 'options')) : ?>
                    <a class="btn btn_gray" href="<?php echo esc_url($woningzoeker_button_link); ?>"
                       target="_blank"><?php the_field('woningzoeker_button_tekst', 'options'); ?> <i
                                class="fal fa-long-arrow-right"></i></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>