<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _rebase
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php /* Content 03 Start */ ?>  
  <section class="b-block">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col col-md-10">
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </section>
  <?php /* Content 03 End */ ?> 
</article><!-- #post-<?php the_ID(); ?> -->
