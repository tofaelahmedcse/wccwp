<?php /*Featured post*/ ?>
<?php $img = get_the_post_thumbnail_url(); ?>
<section class="b-block bg-dark b-viewport featured-post" <?php if(!empty($img)) { echo 'style="background-image: url(\'' . $img . '\');'; } ?>>
    <div class="container align-items-center justify-content-center d-flex">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-10 col-lg-8">
                <h1 class="mb-2 color-light uppercase"><?php the_title() ?></h1>
                <div class="lead my-5"><?php the_excerpt() ?></div>
                <p><a href="<?php the_permalink() ?>" class="btn">Read More</a></p>
            </div>
        </div>
    </div>
</section>
