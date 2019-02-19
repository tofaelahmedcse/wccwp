<?php
$title=get_field('cta_headline','option');
$text=get_field('cta_content','option');
$btn_label=get_field('cta_button_label','option');
$btn_link=get_field('cta_button_link','option');
?>
<section class="b-block bg-2 b-viewport">
    <div class="container align-items-center justify-content-center d-flex">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-10 col-lg-8">
                <h3 class="mb-2"><?php echo $title ?></h3>
                <?php echo $text ?>
                <p class="mt-4"><a href="<?php echo $btn_link ?>" class="btn"><?php echo $btn_label ?></a></p>
            </div>
        </div>
    </div>
</section>
