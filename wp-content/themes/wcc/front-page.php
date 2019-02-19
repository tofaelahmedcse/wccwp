<?php
/**
 * The template for displaying the front page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _rebase
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php
            $section_2_lead_text = get_field('section_2_lead_text');
            $section_2_headline = get_field('section_2_headline');
            $section_2_text = get_field('section_2_text');
            $section_3_button = get_field('section_3_button');
            $section_4_headline = get_field('section_4_headline');
            $section_5_headline = get_field('section_5_headline');
            $section_5_sub_heading = get_field('section_5_sub_heading');
            ?>

            <?php get_template_part('partials/page', 'banner') ?>

            <section class="b-block world-class-contracting-section">
                <div class="container">
                    <div class="row pb-5">
                        <div class="col-md-10 col-12">
                            <p class="lead"><?php echo $section_2_lead_text ?></p>
                            <h2><?php echo $section_2_headline ?></h2>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-8 col-12">
                            <div class="border-text pl-5">
                                <div class="text pl-4">
                                    <?php echo $section_2_text ?>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </section>

            <section class="b-block pt-0 masonary">
                <div class="container-fluid px-0">
                    <div class="row mb-5">
                        <div class="card-columns grid-wrap">
                            <?php $i=1; while (have_rows('section_3')):the_row();
                            $img=get_sub_field('image');
                            $title=get_sub_field('title');
                            $text=get_sub_field('text');
                            ?>
                                <div class="card grid-item-<?php echo $i++; ?>" style="background-image: url(<?php echo $img['url'] ?>);">
                                    <div class="img">
                                        <!-- <img class="card-img-top" src="<?//php echo $img['url'] ?>" alt="<?//php echo $img['alt'] ?>"> -->
                                        <div class="card-overlay">
                                            <h5 class="card-title placeholder-text"><?php echo $title ?></h5>
                                            <p class="card-text placeholder-text"><?php echo $text ?></p>
                                        </div>
                                    </div>

                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 text-center">
                            <h3>
                                <a href="<?php echo $section_3_button['url'] ?>"><?php echo $section_3_button['title'].' ' ?><span class="arrow-circle-right"><img src="<?php echo get_template_directory_uri(); ?>/images/circle-arrow-right-blue@2x.png" alt=""></span></a>
                            </h3>
                        </div>
                    </div>
                </div>
            </section>


            <section class="b-block how-we-work-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2><?php echo $section_4_headline ?></h2>
                        </div>
                    </div>

                    <div class="row owl-carousel owl-theme" id="slider-wrap">
                        <?php while (have_rows('section_4_content')):the_row();
                            $title = get_sub_field('headline');
                            $text = get_sub_field('text');
                            $img = get_sub_field('image');
                            ?>
                            <div class="col-md-6 col-lg-3 col-12 text-center mt-5">
                                <div class="mb-2">
                                    <img src="<?php echo $img['url'] ?>" alt="<?php echo $img['alt'] ?>">
                                </div>

                                <h4><?php echo $title ?></h4>
                                <p><?php echo $text ?></p>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="btn-wrap col-12 text-center">
                        <a href="#" class="how-we-work-btn">Learn more about how we work</a>
                    </div>

                </div>
            </section>


            <section class="b-block support-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2><?php echo $section_5_headline ?></h2>
                            <h6><?php echo $section_5_sub_heading ?></h6>
                        </div>
                    </div>
                    <div class="row mt-5 align-items-center">
                        <?php while (have_rows('section_5_images')):the_row();
                            $img = get_sub_field('image');
                            ?>
                            <div class="col-md-3 col-sm-4 col-6">
                                <img src="<?php echo $img['url'] ?>" alt="<?php echo $img['alt'] ?>">
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </section>

            <?php get_template_part('partials/cta', 'split') ?>

        </main><!-- #main -->
    </div><!-- #primary -->


<?php get_footer();
