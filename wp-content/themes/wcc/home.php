<?php
/**
 * The blog template file.
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
                //arg for fetured post
                $featured_args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 1,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => $cat,
                        ),
                    ),
                );
            } else {
                //arg for fetured post
                $featured_args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 1,
                );
            }

            $featured_post_query = new WP_Query($featured_args);
            if ($featured_post_query->have_posts()) :
                //display featured post
                while ($featured_post_query->have_posts()) : $featured_post_query->the_post();
                    $fetured_post_id = get_the_ID();
                    get_template_part('partials/featured', 'post');
                endwhile;
                wp_reset_postdata();
                ?>
                
                <section>
                    <div class="container">
                        <div class="row">

                            <?php /*Display Category Sidebar form desktop and mobile*/ ?>
                            <div class="col-lg-3 col-md-12 col-12 about-blog-desktop">
                                <div class=" extended"></div>
                                <?php get_template_part('partials/category', 'sidebar'); ?>
                            </div>

                            <?php /*Post Cards Area*/ ?>
                            <div class="pt-5 pt-md-10 col-lg-9 col-md-12 col-12">
                                <div class="row">
                                  <div class="col-12">
                                    <div class="card-columns ml-2">
                                        <?php
                                        if ($cat) {
                                            //arg for other post
                                            $args = array(
                                                'post_type' => 'post',
                                                'post_status' => 'publish',
                                                'posts_per_page' => 6,
                                                'paged' => $paged,
                                                'post__not_in' => array($fetured_post_id),
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
                                                'post__not_in' => array($fetured_post_id),
                                            );
                                        }
                                        $post_query = new WP_Query($args);
                                        while ($post_query->have_posts()) : $post_query->the_post();
                                            if ($post_query->ID != $fetured_post_id):
                                                get_template_part('partials/blog', 'card-masonry');
                                            endif;
                                        endwhile;
                                        wp_reset_postdata() ?>
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
