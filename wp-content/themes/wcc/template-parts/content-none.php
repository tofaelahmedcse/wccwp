<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _rebase
 */

?>

<?php /* Content 03 Start | JeffW: added no-results and not-found class to section, search form css in _forms.scss */ ?>
<section class="b-block no-results not-found">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col col-md-8 text-center">
     		<?php
    		if ( is_404() ) : ?>       
    		
          <h1>Whoops! 404 Error</h1>
          
        <?php else : ?>
        
          <h1>Nothing Found</h1>
          
    		<?php endif; ?>
    		
    		<?php if ( is_search() ) : ?>
    		
          <p class="text-h3"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', '_rebase' ); ?></p>
    
    			<?php get_search_form(); ?>
    
    		<?php else : ?>
    
          <p class="text-h3"><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', '_rebase' ); ?></p>
    
    			<?php get_search_form(); ?>
    
    		<?php endif; ?>
      </div>
    </div>
  </div>
</section>
<?php /* Content 03 End */ ?>
