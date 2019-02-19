<?php
/**
 * Template Name: Our Experience
 *
 * This is the template that displays all posts with respect to category.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _rebase
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php
            $section_2_headline = get_field('section_2_headline');
            $section_4_headline = get_field('section_4_headline');
            $section_4_sub_headline = get_field('section_4_sub_headline');
            
            ?>

            <section id="location-map">
                <div class="container-fluid px-0">
                    <div class="acf-map">
                        <?php while (have_rows('project_locations')) : the_row();

                            $location = get_sub_field('location');

                            ?>
                            <div class="marker" data-lat="<?php echo $location['lat']; ?>"
                                 data-lng="<?php echo $location['lng']; ?>"></div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </section>

            <section class="b-block bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2><?php echo $section_2_headline ?></h2>
                        </div>
                    </div>
                    <div class="row industry-info">
                        <?php while (have_rows('section_2_items')) : the_row();
                            $icon = get_sub_field('icon');
                            $text = get_sub_field('text');
                            ?>

                            <div class="col-6 col-sm-4 col-md-2 text-center">
                                <div class="rounded-img mb-2">
                                    <img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>" class="w-100">
                                </div>
                                <h4><?php echo $text ?></h4>
                            </div>

                        <?php endwhile; ?>
                    </div>
                </div>
            </section>

            <?php
            $count = 0;
            while (have_rows('section_3_content')):the_row();
                $headline = get_sub_field('headline');
                $text = get_sub_field('text');
                if ($count % 2 == 0):
                    ?>

                    <div class="carousel-block-1">
                        <section class="b-block pb-0 pb-md-5">
                            <div class="container-fluid bg">
                                <div class="row bg-row">
                                    <div class="col-12 col-md-6"></div>
                                    <div class="col-12 col-md-6 px-0">
                                        <div class="owl-carousel owl-carousel-experience owl-theme h-100 desktop">
                                            <?php
                                            while (have_rows('images')):the_row();
                                                $img = get_sub_field('image');
                                                ?>
                                                <div class="item img-responsive" style="background-image: url('<?php echo $img['url'] ?>')">
                                                </div>
                                            <?php endwhile; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row pt-4 pt-md-5">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 equal-carousel">
                                        <h3><?php echo $headline ?></h3>
                                        <p><?php echo $text ?></p>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 equal-carousel">
                                        <div class="owl-carousel owl-carousel-experience owl-theme mobile">
                                            <?php
                                            while (have_rows('images')):the_row();
                                                $img = get_sub_field('image');
                                                ?>
                                                <div class="item" style="background-image: url('<?php echo $img['url'] ?>')">
                                                </div>
                                            <?php endwhile; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>


                <?php else: ?>

                    <div class="carousel-block-1">
                        <section class="b-block pb-0 pb-md-5">
                            <div class="container-fluid bg">
                                <div class="row bg-row">
                                    <div class="col-12 col-md-6 px-0">
                                        <div class="owl-carousel owl-carousel-experience owl-theme h-100 desktop">
                                            <?php
                                            while (have_rows('images')):the_row();
                                                $img = get_sub_field('image');
                                                ?>
                                                <div class="item" style="background-image: url('<?php echo $img['url'] ?>')">
                                                </div>
                                            <?php endwhile; ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6"></div>
                                </div>
                            </div>
                            <div class="container custom-container">
                                <div class="row pt-4 pt-md-5">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 equal-carousel order-12">
                                        <div class="owl-carousel owl-carousel-experience owl-theme mobile">
                                            <?php
                                            while (have_rows('images')):the_row();
                                                $img = get_sub_field('image');
                                                ?>
                                                <div class="item" style="background-image: url('<?php echo $img['url'] ?>')">
                                                </div>
                                            <?php endwhile; ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 equal-carousel order-1 order-md-12 pl-1 pl-md-6">
                                        <h3><?php echo $headline ?></h3>
                                        <p><?php echo $text ?></p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>


                <?php endif;
                $count++;
            endwhile; ?>


            <section class="b-block support-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2><?php echo $section_4_headline ?></h2>
                            <h6><?php echo $section_4_sub_headline ?></h6>
                        </div>
                    </div>
                    <div class="row mt-5 align-items-center offset-md-1">
                        <?php while (have_rows('section_4_images')):the_row();
                            $img = get_sub_field('image');
                            ?>
                            <div class="col-md-2 col-sm-4 col-6">
                                <img src="<?php echo $img['url'] ?>" alt="<?php echo $img['alt'] ?>" >
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </section>

            <?php get_template_part('partials/cta','split') ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
