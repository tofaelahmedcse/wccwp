<?php
$cat = get_the_category();
$cat_arr = [];
for ($c = 0; $c < sizeof($cat); $c++) {
    $cat_arr[$c] = $cat[$c]->slug;
}
if ($cat) {
    $args = array(
        'post__not_in' => array($post->ID),
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 3,
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => $cat_arr,
            ),
        ),
    );
} else {
    $args = array(
        'post__not_in' => array($post->ID),
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 3,
    );
} ?>
<div class="row">
    <div class="col-12 mb-2">
        <h2 class="text-center mb-4">Related Articles</h2>
    </div>
    <?php
    $post_query = new WP_Query($args);
    while ($post_query->have_posts()) : $post_query->the_post();
        get_template_part('partials/related', 'card');
    endwhile;
    ?>
</div>
