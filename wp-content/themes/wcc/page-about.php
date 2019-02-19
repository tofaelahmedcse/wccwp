<?php
/**
 * Template Name: About
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
            $team_section_headline = get_field('team_section_headline');
            $team_section_lead_text = get_field('team_section_lead_text');
            $team_section_text = get_field('team_section_text');
            ?>

            <?php get_template_part('partials/page', 'banner') ?>

            <?php /* Content 03 Start */ ?>
            <section class="b-block">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col col-md-8 text-center">
                            <h2 class="mb-4"><?php echo $team_section_headline ?></h2>
                            <div class="lead normal mb-4"><?php echo $team_section_lead_text ?></div>
                            <?php echo $team_section_text ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="b-block pt-0">
              <div class="container">

                    <?php
                    $args = array(
                        'post_type' => 'team',
                        'posts_per_page' => -1,
                    );
                    $post_query = new WP_Query($args);
                    if ($post_query->have_posts()) :?>
                        <div class="row text-center justify-content-center mt-2">
                            <?php
                            while ($post_query->have_posts()) : $post_query->the_post();
                                get_template_part('partials/team', 'card');
                            endwhile; ?>
                        </div>
                    <?php endif; ?>

                </div>
            </section>
            <?php /* Content 03 End */ ?>


        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
