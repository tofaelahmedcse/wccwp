<?php
$title=get_field('cta_form_title','option');
$text=get_field('cta_form_text','option');
$form_ID=get_field('cta_form_id','option');
?>
<section class="b-block bg-4 b-viewport">
    <div class="container align-items-center justify-content-center">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-10 col-lg-8">
                <h2 class="mb-4"><?php echo $title ?></h2>
                <div class="lead"><?php echo $text ?></div>
            </div>
        </div>
        <div class="row justify-content-center text-center mt-4">
            <div class="col-12 col-md-10 col-lg-8">
                <?php ninja_forms_display_form($form_ID) ?>
            </div>
        </div>
    </div>
</section>
