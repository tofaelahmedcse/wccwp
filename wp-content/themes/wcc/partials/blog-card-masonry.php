<?php
$thumbnail_url = get_the_post_thumbnail_url();
?>

<?php //masonary view ?>
<div class="card post-card">
  <a href="<?php the_permalink() ?>">
    <?php if ($thumbnail_url): ?>
    <div class="thumbnail">
        <img src="<?php echo $thumbnail_url ?>" alt="" class="w-100">
    </div>
    <?php endif;
    $date = new DateTime($post->post_date);
    $result = $date->format('F j, Y');?>
    <div class="card-body content">
        <div class="date card-label"><?php echo $result; ?></div>
        <h6 class="title my-2"><?php the_title() ?></h6>
        <div class="excerpt"><?php the_excerpt() ?></div>
        <div class="user mt-2">
            <span>Read More<i class="fas fa-arrow-right float-right"></i></span>
        </div>
    </div>
  </a>
</div>
