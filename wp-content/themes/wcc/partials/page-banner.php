<?php
$banner_headline = get_field('banner_headline');
$banner_text = get_field('banner_text');
$banner_image = get_field('banner_image');
$banner_button_label = get_field('banner_button_label');
$banner_button_link = get_field('banner_button_link');
?>
<section class="b-block bg-dark b-viewport" style="background-image: url(<?php echo $banner_image['url']; ?>)">
    <div class="container align-items-center justify-content-center d-flex">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-12 col-lg-12">
                <h1 class="mb-4"><?php echo $banner_headline ?></h1>
                <p class="<?php if(isPlaceHolder($banner_text)){echo 'placeholder-text';} ?>"><?php echo $banner_text ?></p>
                <?php if ($banner_button_link && $banner_button_label): ?>
                    <a href="<?php echo $banner_button_link ?>" class="btn mt-2"><span class="icon"><img src="<?php echo get_template_directory_uri();?>/images/play-icon.png" alt=""></span><?php echo $banner_button_label ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php 
    if(is_front_page()) :
    ?>
    <div class="go-next-section" id="go-next-section">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mouse-ic@2x.png" alt="Mouse-icon">
    </div>
    <?php endif; ?>
</section>
