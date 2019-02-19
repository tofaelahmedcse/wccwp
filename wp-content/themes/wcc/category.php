<?php
/**
 * The template for displaying all posts category wise.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#category
 *
 * @package _rebase
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', get_post_format() );

            endwhile;
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
