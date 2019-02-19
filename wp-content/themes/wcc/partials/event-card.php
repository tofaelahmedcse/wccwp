<?php
$event_short_description = get_field('event_short_desctiption');
$date_start = get_field('date_start');
$time_start = get_field('time_start');
?>
<div class="event-card-wrapper">
  <a href="<?php the_permalink() ?>">
    <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title() ?>" class="card-img bg">
    <div class="content text-center card-body">
        <p class="card-label"><?php echo $date_start.", ".$time_start?></p>
        <h6 class="title my-2 color-black"><strong><?php the_title() ?></strong></h6>
        <div class="excerpt"><?php echo $event_short_description ?></div>
        <div class="mt-2 user">
          <span class="btn-secondary--sm">Read More</span>
        </div>
    </div>
  </a>
</div>
