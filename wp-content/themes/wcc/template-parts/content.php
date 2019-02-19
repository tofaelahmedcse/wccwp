<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _rebase
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    $cat = get_the_category();
    $img = get_the_post_thumbnail_url();
    ?>
    <?php /*Post Banner*/ ?>
    <section class="b-block bg-dark b-viewport" <?php if(!empty($img)) { echo 'style="background-image: url(\'' . $img . '\');'; } ?>>
        <div class="container align-items-center justify-content-center">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8 col-md-10 col-12">
                    <?php if ($cat): ?>
                        <p class="category-label"><?php echo $cat[0]->name ?></p>
                    <?php endif; ?>
                    <h1 class="my-3 uppercase"><?php the_title() ?></h1>

                    <div class="row">
                        <div class="col">
                            <!-- <div class="avatar">
                                <?php echo get_avatar(get_the_author_meta('ID'), 32); ?>
                            </div>
                            <h6>by <strong>Post Author</strong></h6> -->
                            <em><?php the_date('F j, Y', '<h6 class="mb-3">', '</h4>'); ?></em>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php /* Content 03 Start | JeffW: Removed margin from bottom of H1, added h4 with date */ ?> .
    <section class="b-block--half pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
    <?php /* Content 03 End */ ?>

    <section class="b-block--half">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-12">
                    <?php get_template_part('partials/share', 'buttons'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="b-block--half bg-3">
        <div class="container-fluid">
          <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-12">
                    <?php get_template_part('partials/related', 'articles'); ?>
                </div>
            </div>
          </div>
        </div>
    </section>

    <section class="b-block--half">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-12">
                    <h3 class="centered">Comments</h3>
                    <?php comments_template(); ?>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('partials/cta','single') ?>

</article><!-- #post-<?php the_ID(); ?> -->
