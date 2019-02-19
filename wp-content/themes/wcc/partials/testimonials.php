<?php
$id = get_the_id();
 ?>
<section class="b-block--bottom bg-1">
    <div class="container-fluid">
      <h2 class="text-center mb-4 mb-md-8 color-light"><?php the_field('testimonials_headline', $id); ?></h2>
        <div class="owl-carousel" id="owl-carousel-testimonial">
            <?php
            $args = array(
                'post_type' => 'testimonial',
                'status' => 'publish',
                'posts_per_page' => -1,
                'orderby' => 'rand',
            );
            $query = new WP_Query($args);
            while ($query->have_posts()) : $query->the_post();
                $thumbnail_url = get_the_post_thumbnail_url(); ?>


                <div class="row justify-content-center">
                    <?php if ($thumbnail_url): ?>
                        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-3">
                            <img src="<?php echo $thumbnail_url ?>" alt="<?php the_title() ?>" class="w-100">
                        </div>
                    <?php endif; ?>

                    <div class="col-xl-5 col-lg-5 col-md-7 col-sm-8 col-9">

                        <h5 class="mb-2 color-light"><strong><?php the_title() ?></strong></h5>
                        <div class="color-light"><?php the_content() ?></div>

                    </div>
                </div>


            <?php endwhile;
            wp_reset_postdata() ?>
        </div>
    </div>
</section>
