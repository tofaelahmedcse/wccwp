<?php
/*Category Sidebar
included this partial in home.php and page-blog-cat.php.
i made some part of that partial hidden by using css according to screen size.
Css is in organisms.scss.
*/
?>

<?php
$terms = get_terms(array(
    'taxonomy' => 'category',
));
global $wp;
$page_url= home_url( $wp->request );
?>
<?php/*For desktop*/ ?>
<div class="pt-10 row cat-list">
    <div class="col-12">
        <h4 class="mb-3">Blog Categories</h4>
        <p>
            <a href="<?php echo $page_url ?>" class="">All Posts</a>
        </p>
        <?php foreach ($terms as $term):
            if ($term->count > 0):
                ?>
                <p class="mb-2">
                    <a href="<?php echo $page_url . '/?category=' . $term->slug ?>"><?php echo $term->name ?></a>
                </p>
            <?php endif;
        endforeach; ?>
    </div>
</div>

<?php /*For Mobile*/?>
<div class="row cat-list-select">
    <div class="col-12">
        <select name="cate-select" id="cate-dropdown">
            <option value="">Select</option>
            <option value="all">All</option>
            <?php foreach ($terms as $term):
                if ($term->count > 0):
                    ?>
                    <option value="<?php echo $term->slug ?>"><?php echo $term->name ?></option>
                <?php endif;
            endforeach; ?>
        </select>
    </div>
</div>

<?php /*For mobile and desktop*/?>
<div class="row mt-5 mt-md-10 about-blog-content pr-md-2 pr-xl-4">
    <div class="col-12">
        <h4 class="mb-3">About this blog</h4>
    </div>
    <div class="col-12">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
    </div>
</div>
