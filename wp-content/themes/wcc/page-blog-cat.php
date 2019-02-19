<?php
/**
 * Template Name: Blog Category
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
            //building query args for fetured post
            $cat = $_GET['category'];
            if ($cat) {
                //arg for other post
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 6,
                    'paged' => $paged,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => $cat,
                        ),
                    ),
                );
            } else {
                //arg for other post
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 6,
                    'paged' => $paged,
                );
            }
            $post_query = new WP_Query($args);
            if ($post_query->have_posts()) :?>


                <section class="b-block bg-dark b-viewport">
                    <div class="container align-items-center">
                        <div class="row">
                            <div class="col-12 col-md-10 col-lg-8">
                                <?php if ($cat) {
                                    $term=get_term_by('slug',$cat,'category')?>
                                    <h1><?php echo $term->name ?></h1>
                                    <p><?php echo $term->description ?></p>
                                <?php } else { ?>
                                    <h1 class="mb-4"> Blog Categories</h1>
                                    <p> Lorem Ipsum de lori Blog Category Page description</p>
                                    <?php
                                } ?>
                            </div>
                        </div>
                    </div>
                </section>


                <section>
                    <div class="container">
                        <div class="row">

                            <?php /*Display Category Sidebar*/ ?>
                            <div class="col-lg-3 col-md-12 col-12 post-cat about-blog-desktop">
                                <div class="extended"></div>
                                <?php get_template_part('partials/category', 'sidebar'); ?>
                            </div>

                            <?php /*Post Cards Area*/ ?>
                            <div class="pt-5 pt-md-10 col-lg-9 col-md-8 col-12">
                                <div class="row">
                                  <div class="col-12">
                                    <div class="card-columns">
                                    <?php
                                    while ($post_query->have_posts()) : $post_query->the_post();
                                        get_template_part('partials/blog', 'card-masonry');
                                    endwhile; ?>
                                    </div>
                                  </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 text-center">
                                        <div class="pagination mt-2 justify-content-center">
                                            <?php
                                            echo paginate_links(array(
                                                'total' => $post_query->max_num_pages,
                                                'prev_next' => true,
                                                'prev_text' => __('<i class="fas fa-caret-left"></i>'),
                                                'next_text' => __('<i class="fas fa-caret-right"></i>'),
                                            ));
                                            ?>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </section>

                <?php /*Display Category Sidebar for mobile*/ ?>
                <section class="b-block pt-0 about-blog-mobile">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <?php get_template_part('partials/category', 'sidebar'); ?>
                            </div>
                        </div>
                    </div>
                </section>

            <?php
            else :

                get_template_part('template-parts/content', 'none');

            endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
