<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package _rebase
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <?php /* Content 03 Start | JeffW: Removed padding from bottom of block */ ?> 
      <section class="b-block pb-0">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col col-md-10">
              <h1><?php printf( esc_html__( 'Search Results for: %s', '_rebase' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
            </div>
          </div>
        </div>
      </section>
      <?php /* Content 03 End */ ?>
			
			<?php
			if ( have_posts() ) : 
			
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'search' );

				endwhile;

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
