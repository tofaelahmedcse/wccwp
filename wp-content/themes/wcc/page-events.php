<?php
/**
 * Template Name: Events
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

            <?php get_template_part('partials/page', 'banner') ?>

            <section class="b-block">
                <div class="container">
                    <div class="row justify-content-center">

                        <?php
                        $args = array(
                            'post_type' => 'event',
                            'post_status' => 'publish',
                            'posts_per_page' => -1,
                        );
                        $faqs = new WP_Query($args);
                        $l = 0;
                        while ($faqs->have_posts()):
                            $faqs->the_post();
                            ?>

                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <?php get_template_part('partials/event','card') ?>
                            </div>

                        <?php
                        endwhile;
                        ?>

                    </div>
                </div>
            </section>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
