<?php
/**
 * Template Name: Our Values
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
            $section_2_text = get_field('section_2_text');
            $section_4_headline = get_field('section_4_headline');
            $b_5_gallary=get_field('section_3_gallary');
            $section_4_text = get_field('section_4_text');
            $section_5_headline = get_field('section_5_headline');
            $section_5_text = get_field('section_5_text');
            $section_6_headline = get_field('section_6_headline');
            ?>

            <?php get_template_part('partials/page', 'banner') ?>

            <section class="b-block pb-0 contracting-info">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2><?php echo $section_2_headline ?></h2>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-5">
                        <div class="col-12 col-md-10 text-center">
                            <?php echo $section_2_text ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="b-block gallary">

                <?php if (!empty($b_5_gallary)):
                    ?>
                    <div id="gallery">
                        <section class="b-block--half pb-0 pb-md-5">
                            <h2 class="text-center">
                                Gallery
                            </h2>
                        </section>
                        <section class="b-block pt-md-0">
                            <div class="row cont-1">

                                <div class="col-12 col-md-7 col-xl-8">
                                    <div class="main" style="background-image: url('<?php echo $b_5_gallary[0]['url']; ?>');">
                                    </div>
                                </div>
                                <div class="col-12 col-md-5 col-xl-4">
                                    <div class="row pt-3 pt-md-0">
                                        <div class="col-6">
                                            <div class="tall" style="background-image: url('<?php echo $b_5_gallary[1]['url']; ?>');"></div>
                                        </div>
                                        <div class="col-6">
                                            <div class="tall" style="background-image: url('<?php echo $b_5_gallary[2]['url']; ?>');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-3 pt-md-0">
                                        <div class="col-12">
                                            <div class="flat" style="background-image: url('<?php echo $b_5_gallary[3]['url']; ?>');"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row cont-2 pt-3" style="display: none;">

                                <div class="col-12 col-md-5 col-xl-4">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="tall" style="background-image: url('<?php echo $b_5_gallary[4]['url']; ?>');"></div>
                                        </div>
                                        <div class="col-6">
                                            <div class="tall" style="background-image: url('<?php echo $b_5_gallary[5]['url']; ?>');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-3 pt-md-0">
                                        <div class="col-12">
                                            <div class="flat" style="background-image: url('<?php echo $b_5_gallary[6]['url']; ?>');"></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-12 col-md-7 col-xl-8 pt-3 pt-md-0">
                                    <div class="main" style="background-image: url('<?php echo $b_5_gallary[7]['url']; ?>');">
                                    </div>
                                </div>

                            </div>

                            <div class="row cont-3 pt-3" style="display: none;">
                                <div class="col-12 col-md-5 col-xl-4 order-md-2">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="fours" style="background-image: url('<?php echo $b_5_gallary[9]['url']; ?>');"></div>
                                        </div>
                                        <div class="col-6">
                                            <div class="fours" style="background-image: url('<?php echo $b_5_gallary[10]['url']; ?>');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="fours" style="background-image: url('<?php echo $b_5_gallary[11]['url']; ?>');"></div>
                                        </div>
                                        <div class="col-6">
                                            <div class="fours" style="background-image: url('<?php echo $b_5_gallary[12]['url']; ?>');">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-7 col-xl-8 order-md-1 pt-3">
                                    <div class="single-vert" style="background-image: url('<?php echo $b_5_gallary[8]['url']; ?>">
                                    </div>
                                </div>
                            </div>


                            <div class="bg-grey row py-5 mt-3" id="btn-see-more">
                                <div class="col-12 col-sm-12 text-center">
                                </div>
                            </div>
                        </section>
                    </div>
                <?php endif; ?>

            </section>

            <section class="b-block our-valuse-info">
                <div class="container">
                    <div class="row justify-content-center">

                            <?php
                            while (have_rows('section_4_content')):the_row();
                                $headline = get_sub_field('headline');
                                $text = get_sub_field('text');
                                $image = get_sub_field('image') ?>
                                <div class="col-12 col-sm-6 col-md-4 text-center">
                                    <div class="mb-2">
                                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                                    </div>
                                    <h3><?php echo $headline ?></h3>
                                    <?php echo $text ?>
                                </div>
                            <?php endwhile; ?>

                    </div>
                </div>
            </section>

            <section class="b-block bg-light our-values-health-safety">
                <?php
                $count = 0;
                while (have_rows('section_5_content')):the_row();
                    $headline = get_sub_field('headline');
                    $text = get_sub_field('text');
                    $image = get_sub_field('icon');
                    if ($count % 2 == 0):
                        ?>

                        <div class="container mb-5">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6">
                                    <h3><?php echo $headline ?></h3>
                                    <?php echo $text ?>
                                </div>
                                <div class="col-12 col-md-6 s-image">
                                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alr'] ?>"
                                         class="w-100">
                                </div>
                            </div>
                        </div>

                    <?php else: ?>

                        <div class="container mb-5">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6 m-image">
                                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alr'] ?>"
                                         class="w-100">
                                </div>
                                <div class="col-12 col-md-6">
                                    <h3><?php echo $headline ?></h3>
                                    <?php echo $text ?>
                                </div>
                            </div>
                        </div>

                    <?php endif;
                    $count++;
                endwhile; ?>
            </section>


            <?php get_template_part('partials/cta', 'split') ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
