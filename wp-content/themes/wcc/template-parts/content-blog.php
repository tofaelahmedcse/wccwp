<?php
/**
 * Template part for displaying page content in home.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _rebase
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php /* Content 03 Start | JeffW: Reduce padding between blocks, added h4 with date */ ?>
  <section class="b-block py-2">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col col-md-10">
          <h2 class="mb-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <?php the_date('F j, Y', '<h4 class="mb-3">', '</h4>'); ?>
          <?php the_excerpt(); ?>
        </div>
      </div>
    </div>
  </section>
  <?php /* Content 03 End */ ?>
</article><!-- #post-<?php the_ID(); ?> -->
