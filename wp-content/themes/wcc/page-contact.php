<?php
/**
 * Template Name: Contact
 *
 * This is the template that displays all posts with respect to category.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _rebase
 */


get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php
            $section_4_headline = get_field('section_4_headline');
            $section_4_text = get_field('section_4_text');
            $phone_est = get_field('phone');
            $email = get_field('email');
            ?>

            <?php echo get_template_part('partials/page-banner'); ?>

            <section class="b-block pb-0 contact-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-xs-12 col-sm-12">
                            <?php
                            while (have_rows('offices')):the_row();
                                $office_title = get_sub_field('office_title');
                                $address = get_sub_field('address');
                                $phone = get_sub_field('phone');
                                $fax = get_sub_field('fax');
                                $email = get_sub_field('email');
                                ?>
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <h3><?php echo $office_title ?></h3>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-12 col-md-11">
                                        <div class="row">
                                            <div class="col-12">
                                                <?php if ($address) { ?>
                                                    <span><?php echo $address; ?></span>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <?php if ($phone) { ?>
                                                    <span class="contact-details d-inline-block">Phone:&nbsp; </span><a
                                                            href="tel:<?php echo $phone; ?>"
                                                            class="contact-details"><?php echo $phone; ?></a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <?php if ($email) { ?>
                                                    <span class="contact-details d-inline-block">Email: &nbsp; </span><a
                                                            href="mailto:<?php echo $email; ?>"
                                                            class="contact-details"><?php echo $email; ?></a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <?php if ($fax) { ?>
                                                    <span class="contact-details d-inline-block">Fax: &nbsp;</span><span
                                                            class="contact-details"><?php echo $fax; ?></span>
                                                <?php } ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            <?php
                            endwhile;
                            ?>

                        </div>
                        <div class="col-md-7 pt-3 pb-1 bg-4 col-sm-12 col-xs-12">
                            <?php if (!empty($form_title)) { ?>
                                <h3 class="mb-4"><?php echo $form_title; ?></h3>
                            <?php } ?>
                            <?php Ninja_Forms()->display(1); ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="b-block team-section">
                <div class="container">
                    <div class="row">

                        <?php
                        while (have_rows('team_members')):the_row();
                            $img = get_sub_field('image');
                            $name = get_sub_field('name');
                            $role = get_sub_field('role');
                            $phone = get_sub_field('phone');
                            $email = get_sub_field('email');
                            ?>

                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2">
                                <div class="card-wrapper py-2 px-2 text-center equal">
                                    <div class="rounded-img mb-2">
                                        <img src="<?php echo $img['url'] ?>" alt="<?php echo $img['alt'] ?>"
                                             class="w-100">
                                    </div>
                                    <h4><?php echo $name ?></h4>
                                    <p><?php echo $role ?></p>
                                    <?php
                                    if ($phone) {
                                    ?>
                                    <a href="<?php 'tel:' . $phone ?>"><?php echo $phone ?></a>
                                    <?php } ?>
                                    <?php
                                    if ($email) {
                                    ?>
                                    <a href="<?php 'mailto:' . $email ?>" class="wrap-link"><?php echo $email ?></a>
                                    <?php } ?>
                                </div>
                            </div>

                        <?php
                        endwhile; ?>
                    </div>
                </div>
            </section>

            <section class="b-block project-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h3><?php echo $section_4_headline ?></h3>
                        </div>
                    </div>

                    <div class="row project-content">
                        <div class="col-12 col-md-6 col-lg-5 offset-lg-1">
                            <p><?php echo $section_4_text ?></p>

                           

                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                             <div>
                                <?php if ($phone_est) { ?>
                                    <p><span class="contact-label">Call us</span><a
                                                href="tel:<?php echo $phone_est; ?>"
                                                class="contact-details"><?php echo $phone_est; ?></a>
                                    </p>
                                <?php } ?>
                                <?php if ($email) { ?>
                                    <p><span class="contact-label">Have a question</span><a
                                                href="mailto:<?php echo $email; ?>"
                                                class="contact-details"><?php echo $email; ?></a>
                                    </p>
                                <?php } ?>
                            </div>

                        </div>
                    </div>

                </div>
            </section>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
