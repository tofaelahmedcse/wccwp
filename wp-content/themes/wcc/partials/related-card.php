<?php
//non masonary view
//to use this card
// add this partial in page-blog-cat.php and home.php
//uncomment this code and remove 'card-columns' div from page-blog-cat.php and home.php
$thumbnail_url = get_the_post_thumbnail_url();
$cat = get_the_category();
?>

<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
  <a href="<?php the_permalink() ?>">
    <div class="post-card bg-white">
        <div class="content card-body equal">
            <?php
            $date = new DateTime($post->post_date);
            $result = $date->format('F j, Y');?>
            <div class="card-label"><?php echo $cat[0]->name; ?></div>
            <h6 class="title my-2"><?php the_title() ?></h6>

        </div>
    </div>
  </a>
</div>
