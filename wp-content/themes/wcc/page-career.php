<?php
/**
 * Template Name: Career
 *
 * This is the template that displays all posts with respect to category.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _rebase
 */

$section_headline = get_field('section_headline');
$section_lead_text = get_field('section_lead_text');
$section_text = get_field('section_text');

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            
            <?php
            $section_2_text = get_field('section_2_text');
            $section_3_headline = get_field('section_3_headline');
            $section_3text = get_field('section_3text');
            $avaialble_jobs_headline = get_field('avaialble_jobs_headline');
            $avaialble_jobs_text = get_field('avaialble_jobs_text');
            ?>

            <?php echo get_template_part('partials/page-banner'); ?>


            <section class="b-block benefit-section">
                <div class="container">
                    <div class="row mb-5 justify-content-center text-center">
                        <div class="col-12 col-md-10 col-lg-9">
                            <p><?php echo $section_2_text ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <?php while (have_rows('section_2_features')):the_row();
                            $title = get_sub_field('headline');
                            $text = get_sub_field('text');
                            $img = get_sub_field('icon');
                            ?>
                            <div class="col-12 col-sm-6 col-md-3 text-center">
                                <div class="mb-2">
                                    <img src="<?php echo $img['url'] ?>" alt="<?php echo $img['alt'] ?>">
                                </div>

                                <h4><?php echo $title ?></h4>
                                <p><?php echo $text ?></p>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </section>

            <section class="b-block bg-4 contact-content our-carrer-form">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-6 col-md-5">

                            <div class="row mb-5">
                                <div class="col-12">
                                    <h3><?php echo $section_3_headline ?></h3>
                                    <p><?php echo $section_3text ?></p>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col-12">
                                    <h3><?php echo $avaialble_jobs_headline ?></h3>
                                    <p><?php echo $avaialble_jobs_text ?></p>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-12">

                                    <div class="accordion" id="careers-accordion">
                                        <?php
                                        $count = 0;
                                        while (have_rows('list_of_avaialble_jobs')):the_row();
                                            $headline = get_sub_field('headline');
                                            $text = get_sub_field('text');
                                            if ($text):
                                                ?>

                                                <div class="card">
                                                    <div class="card-header" id="<?php echo 'heading'.$count ?>">
                                                        <h5 class="mb-0">
                                                            <button class="" type="button"
                                                                    data-toggle="collapse" data-target="<?php echo '#collapse'.$count ?>"
                                                                    aria-expanded="<?php /*if($count==0){ echo 'true';}else{echo 'false';}*/ ?>" aria-controls="<?php echo 'collapse'.$count ?>">
                                                                <?php echo $headline ?>
                                                            </button>
                                                        </h5>
                                                    </div>

                                                    <div id="<?php echo 'collapse'.$count ?>" class="collapse <?php/*if($count==0){ echo 'show';}*/?>"
                                                         aria-labelledby="<?php echo 'heading'.$count ?>"
                                                         data-parent="#careers-accordion">
                                                        <div class="card-body">
                                                            <?php echo $text ?>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php
                                                $count++;
                                            else: ?>
                                                <p class="lead"><?php echo $headline ?></p>
                                            <?php endif; ?>

                                        <?php
                                        endwhile; ?>

                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="col-12 col-sm-6 col-md-7 bg-1 pt-3 pb-1">
                            <h3>Apply Now</h3>
                            <?php ninja_forms_display_form('2') ?>
                        </div>

                    </div>
                </div>
            </section>

            <?php get_template_part('partials/cta', 'split') ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
