<?php
/**
 * Template Name: Faqs
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
        $block_1_headline=get_field('block_1_headline');
        $block_1_content=get_field('block_1_content');

  			get_template_part( 'partials/page', 'banner' );

  		?>

            <section class="b-block">
                <div class="container align-items-center justify-content-center">
                    <div class="row justify-content-center text-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <h2 class="mb-4"><?php echo $block_1_headline ?></h2>
                            <div class="lead"><?php echo $block_1_content ?></div>
                        </div>
                    </div>
                </div>
            </section>

            <?php get_template_part( 'partials/faqs' ); ?>

            <?php get_template_part( 'partials/cta','form' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
