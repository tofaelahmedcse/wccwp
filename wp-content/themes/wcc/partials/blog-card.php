<?php
//non masonary view
//to use this card
// add this partial in page-blog-cat.php and home.php
//uncomment this code and remove 'card-columns' div from page-blog-cat.php and home.php
$thumbnail_url = get_the_post_thumbnail_url();
?>

<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
    <div class="post-card">
      <a href="<?php the_permalink() ?>">
        <div class="content card-body equal">
            <?php if ($thumbnail_url): ?>
                <div class="thumbnail">
                    <img src="<?php echo $thumbnail_url ?>" alt="" class="card-img bg">
                </div>
            <?php endif;
            $date = new DateTime($post->post_date);
            $result = $date->format('F j, Y');?>
            <div class="date card-label"><?php echo $result; ?></div>
            <h6 class="title my-2"><?php the_title() ?></h6>
            <div class="excerpt"><?php the_excerpt() ?></div>
            <div class="mt-2 user">
                <span class="btn-tertiary">Read More<i class="fas fa-arrow-right float-right"></i></span>
            </div>
        </div>
      </a>
    </div>
</div>
