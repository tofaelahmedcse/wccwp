<?php
$img = get_the_post_thumbnail_url();
$banner_text = get_field('banner_text');
$phone = get_field('phone');
$email = get_field('email');
$fax = get_field('fax');
$address = get_field('address');
?>
<div class="col-12 col-sm-6 col-md-6 col-lg-4">
    <div class="location-card">
        <div class="content py-2 px-2">
            <img src="<?php echo $img ?>" alt="<?php the_title() ?>" class="w-100">
            <div class="row text-center mt-2 mb-2">
                <div class="col-12 mb-2">
                    <h3 class="mb-2"><?php the_title() ?></h3>
                    <p><?php echo $banner_text ?></p>
                </div>
                <div class="col-12 col-sm-6">
                    <a href="<?php echo 'tel:' . $phone ?>">Phone</a>
                </div>
                <div class="col-12 col-sm-6">
                    <a href="<?php echo 'mailto:' . $email ?>">Email</a>
                </div>
                <div class="col-12 mt-4">
                    <a href="<?php the_permalink() ?>" class="btn btn-secondary">See Details</a>
                </div>
            </div>
        </div>
    </div>
</div>