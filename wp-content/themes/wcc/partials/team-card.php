<?php
global $post;
$post_slug = $post->post_name;
$position = get_field('position');
$text = get_field('text');
$button_label = get_field('button_label');
$button_link = get_field('button_link');
?>

<div class="col-12 col-sm-4 col-md-3">
    <div class="team-card-wrapper">
        <button type="button px-0" data-toggle="modal" data-target="<?php echo '#' . $post_slug ?>">
            <img alt="<?php the_title() ?>" class="w-100" src="<?php echo get_the_post_thumbnail_url() ?>">
            <div class="card-body">
              <h5><strong><?php the_title() ?></strong></h5>
              <p><?php echo $position ?></p>
            </div>
        </button>
    </div>
</div>

<!-- Modal -->
<div class="modal team-modal fade" id="<?php echo $post_slug ?>" tabindex="-1" role="dialog"
     aria-labelledby="<?php echo $post_slug . 'label' ?>"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body p-0">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <img alt="<?php the_title() ?>" class="w-100 modal-img" src="<?php echo get_the_post_thumbnail_url() ?>">
                    </div>
                    <div class="col-12 col-md-6 text-left modal-text">
                        <h4><strong><?php the_title() ?></strong></h4>
                        <p><?php echo $position ?></p>

                        <div class="row py-2">
                            <div class="col-12">
                                <?php
                                while (have_rows('social_media')):the_row();
                                    $icon = get_sub_field('icon');
                                    $link = get_sub_field('link');
                                    ?>
                                    <a href="<?php echo $link ?>"><i
                                                class="fab <?php echo $icon ?>"></i></a>
                                <?php endwhile; ?>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <?php echo $text ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <a href="<?php echo $button_link ?>" class="btn-primary mt-4">
                                    <?php echo $button_label ?>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
