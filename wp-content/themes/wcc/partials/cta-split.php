<?php
$split_1_title=get_field('cta_headline_left');
$split_1_text=get_field('cta_content_left');
$split_1_button_link=get_field('cta_button_link_left');
$split_2_title=get_field('cta_headline_right');
$split_2_text=get_field('cta_content_right');
$split_2_button_link=get_field('cta_button_link_right');
?>

<?php /* CTA 07 Start */ ?>
<div class="split-cta">
<section class="b-block">
    <div class="container-fluid bg">
        <div class="row bg-row">
            <div class="col-12 col-md-6 bg-3 bg-regal-blue"></div>
            <div class="col-12 col-md-6 bg-1 bg-endover"></div>
        </div>
    </div>
    <div class="container">
        <div class="row pt-4 pt-md-5 no-gutters">
            <div class="col-12 mr-lg-auto col-sm-12 col-md-6 col-lg-4 pr-2 split-content">
                <h3><?php echo $split_1_title ?></h3>
                <p class="<?php if(isPlaceHolder($split_1_text)){echo 'placeholder-text';} ?>"><?php echo $split_1_text ?></p>
                <p class="mt-5">
                    <a class="" href="<?php echo $split_1_button_link['url'] ?>"><?php echo $split_1_button_link['title'] ?><span class="arrow-circle-right"><img src="<?php echo get_template_directory_uri(); ?>/images/link-arrow-blue@2x.png" alt=""></span></a>
                </p>
            </div>

            <div class="col-12 ml-lh-auto col-sm-12 col-md-6 col-lg-4 ml-sm-auto mt-5 mt-md-0 split-content">
                <h3><?php echo $split_2_title ?></h3>
                <p class="<?php if(isPlaceHolder($split_2_text)){echo 'placeholder-text';} ?>"><?php echo $split_2_text ?></p>
                <p class="mt-5">
                    <a class="" href="<?php echo $split_2_button_link['url'] ?>"><?php echo $split_2_button_link['title'] ?><span class="arrow-circle-right"><img src="<?php echo get_template_directory_uri(); ?>/images/link-arrow-blue@2x.png" alt=""></span></a>
                </p>
            </div>
        </div>
    </div>
</section>
</div>
<?php /* CTA 07 End */ ?>
