<?php
/**
 * Template Name: why wcc
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
            $section_4_text = get_field('section_4_text');
            $section_4_right_text = get_field('section_4_right_text');
            $section_5_headline = get_field('section_5_headline');
            $section_5_text = get_field('section_5_text');
            $section_6_headline = get_field('section_6_headline');
            $section_6_content = get_field('section_6_content');
            ?>

            <?php get_template_part('partials/page', 'banner') ?>

            <section class="b-block contracting-info">
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


            <?php
            $count = 0;
            while (have_rows('section_3_content')):the_row();
                $headline = get_sub_field('headline');
                $text = get_sub_field('text');
                $image = get_sub_field('image');
                if ($count % 2 == 0):
                    ?>
                    <?php /* Content 26 Start */ ?>
                    <section class="equal-section position-relative commitment-info" data-mh="custom-loc-2">

                        <div class="container">
                            <div class="row py-5">
                                <div class="col-12 col-md-6 offset-md-6 zed1 pl-6 col-xs-12">
                                    <h2><?php echo $headline ?></h2>
                                    <?php echo $text ?>
                                </div>
                                <div class="col-sm-12 col-md-6 img-holder col-xs-12" style="background-image: url('<?php echo $image['url']; ?>')"></div>
                            </div>
                        </div>
                        <div class="container-fluid absolute">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 bk-img-block equal-section" data-mh="custom-loc-2"
                                     style="background-image: url('<?php echo $image['url']; ?>')"></div>
                            </div>
                        </div>
                    </section>
                    <?php /* Content 26 End */ ?>
                    
                    <section class="b-block organized-info">
                <div class="container">
                    <div class="row title-info">
                        <div class="col-12 text-center">
                            <h2><?php echo $section_4_headline ?></h2>
                        </div>
                    </div>
                    <div class="row justify-content-left mt-5">
                        <div class="col-6 text-left">
                            <?php echo $section_4_text ?>
                        </div>
                        <div class="col-6 text-left list-info">
                           <?php echo $section_4_right_text ?>
                        </div>
                    </div>
                </div>
            </section>

                <?php else: ?>
                    

                    <?php /* Content 27 Start */ ?>
                    <section class="position-relative equal-section history-info" data-mh="custom-loc-1">

                        <div class="container">
                            <div class="row py-5">
                                <div class="col-sm-12 col-md-6 align-self-center zed1 pr-5">
                                    <h2><?php echo $headline ?></h2>
                                    <?php echo $text ?>
                                </div>
                                <div class="col-sm-12 col-md-6 img-holder" style="background-image: url('<?php echo $image['url']; ?>')"></div>
                            </div>
                        </div>
                        <div class="container-fluid absolute">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 offset-md-6 bk-img-block equal-section"
                                     data-mh="custom-loc-1" style="background-image: url('<?php echo $image['url']; ?>')"></div>
                            </div>
                        </div>
                    </section>
                    <?php /* Content 27 End */ ?>

                <?php endif;
                $count++;
            endwhile; ?>


            <section class="b-block world-skill">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2><?php echo $section_5_headline ?></h2>
                        </div>
                    </div>
                    <div class="row mt-5 align-items-center">
                        <div class="col-12 col-md-6 text-center">
                            <div class="random-gallary">
                                <?php
                                $count = 0;
                                while (have_rows('section_5_images')):the_row();
                                    $img = get_sub_field('image');
                                    ?>
                                    <div class="<?php echo 'img-' . $count; ?>" style="background-image: url(<?php echo $img['url'] ?>)"></div>
                                    <?php $count++;
                                endwhile; ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 text-left">
                            <?php echo $section_5_text ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="b-block support-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2><?php echo $section_6_headline ?></h2>
                               <?php echo $section_6_content ?>
                        </div>
                       
                    </div>
                    <div class="row mt-5 align-items-center offset-md-1">
                        <?php while (have_rows('section_6_images')):the_row();
                            $img = get_sub_field('image');
                            ?>
                            <div class="col-md-2 col-sm-4 col-6">
                                <img src="<?php echo $img['url'] ?>" alt="<?php echo $img['alt'] ?>">
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </section>

            <?php get_template_part('partials/cta', 'split') ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
