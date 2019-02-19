<?php
$terms = get_terms('faq_categories');
?>

<?php if ($terms): ?>

    <div class="container pb-10">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">

                <div class="tab-section">
                    <div class="container">
                        <div id="responsive-tabs" class="tabs responsive-tabs">
                            <ul class="nav nav-tabs" role="tablist">

                                <?php
                                $i = 0;
                                foreach ($terms as $term): ?>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo ($i == 0) ? 'active' : ''; ?>" data-toggle="tab"
                                           role="tab"
                                           href="<?php echo '#' . $term->slug ?>">
                                            <?php echo $term->name ?>
                                        </a>
                                    </li>
                                    <?php
                                    $i++;
                                endforeach; ?>

                            </ul>
                        </div>

                        <div class="tab-content">
                            <?php
                            $j = 0;
                            foreach ($terms as $term): ?>

                                <div id="<?php echo $term->slug ?>"
                                     class="tab-pane <?php echo ($j == 0) ? 'active' : ''; ?>" role="tabpanel">
                                    <div class="row justify-content-center">
                                        <div class="col-12">


                                            <div id="<?php echo 'accordion-' . $j ?>" class="panel-group">

                                                <?php
                                                $args = array(
                                                    'post_type' => 'faq',
                                                    'post_status' => 'publish',
                                                    'posts_per_page' => -1,
                                                    'tax_query' => array(
                                                        array(
                                                            'taxonomy' => 'faq_categories',
                                                            'field' => 'slug',
                                                            'terms' => $term->slug
                                                        )
                                                    ),
                                                );
                                                $faqs = new WP_Query($args);
                                                $k = 0;
                                                while ($faqs->have_posts()):
                                                    $faqs->the_post();

                                                    $q = get_field('question');
                                                    $a = get_field('answer'); ?>


                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse"
                                                                   data-parent="<?php echo '#accordion-' . $j ?>"
                                                                   href="<?php echo "#collapse-g" . $k; ?>"><?php echo $q; ?></a>
                                                            </h4>
                                                        </div>
                                                        <div id="<?php echo "collapse-g" . $k; ?>"
                                                             class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <?php echo $a; ?>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <?php $k++; endwhile; ?>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <?php
                                $j++;
                            endforeach; ?>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php else: ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div id="accordion-g" class="panel-group">

                    <?php
                    $args = array(
                        'post_type' => 'faq',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                    );
                    $faqs = new WP_Query($args);
                    $l = 0;
                    while ($faqs->have_posts()):
                        $faqs->the_post();

                        $q = get_field('question');
                        $a = get_field('answer'); ?>


                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse"
                                       data-parent="#accordion-g"
                                       href="<?php echo "#collapse-g" . $l; ?>"><?php echo $q; ?></a>
                                </h4>
                            </div>
                            <div id="<?php echo "collapse-g" . $l; ?>"
                                 class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php echo $a; ?>
                                </div>
                            </div>
                        </div>

                        <?php
                        $l++;

                    endwhile; ?>

                </div>


            </div>
        </div>
    </div>

<?php endif; ?>
