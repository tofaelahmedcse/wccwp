<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _rebase
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

    <?php /* Content 03 Start | JeffW: Removed padding from bottom of block */ ?>     
    <section class="b-block pb-0">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col col-md-10">
            <h1><?php the_archive_title(); ?></h1>
            <?php the_archive_description(); ?>
          </div>
        </div>
      </div>
    </section>
    <?php /* Content 03 End */ ?> 

		<?php
		if ( have_posts() ) : 
  		
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'blog' );

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
