<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<section id="hero">
	<div class="jumbotron"></div>
</section>


<section id="about" class="wrap container">

    <div class="row">
        <div class="margin-bottom col-md-8">
            <h2><?php $post = get_post(2); $content = apply_filters('the_title', $post->post_title); echo $content;?></h2>
            <?php $post = get_post(2); $content = apply_filters('the_content', $post->post_content); echo $content;?>
        </div>
        <div class="col-md-4">
            <?php get_template_part('doctor-images'); ?>
        </div>
    </div>

</section>

<section class="wrap container">

    <div class="row">
        <div class="col-sm-12">
            <h2>Insurance</h2>
            <?php $post = get_post(67); $content = apply_filters('the_content', $post->post_content); echo $content;?>
        </div>
    </div>

</section>

<section class="wrap container">

    <div class="row">
        <div id="contact" class="col-md-12">
            <h2>Contact Us</h2>
            <div class="header"></div>
            <div class="insurance">

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 text-center">
            <?php $post = get_post(9); $content = apply_filters('the_content', $post->post_content); echo $content;?>
        </div>
        <div class="col-md-4 text-center">
            <h4>Office Location</h4>
            <p>
                <?= get_option('qs_contact_street'); ?>
            </p>
            <p>
                <?= get_option('qs_contact_city'); ?>,
                <?= get_option('qs_contact_state'); ?>
                <?= get_option('qs_contact_zip'); ?>
            </p>
        </div>
        <div class="col-md-4 text-center">
            <h4>Phone Numbers</h4>
            <p>Tel: <a href="tel:<?= get_option("qs_contact_phone"); ?>"><?= get_option("qs_contact_phone"); ?></a></p>
            <p>Fax: <?= get_option("qs_contact_fax"); ?></p>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4 text-center">
            <?php $post = get_post(63); $content = apply_filters('the_content', $post->post_content); echo $content;?>
        </div>
        <div class="col-md-4 text-center">
            <h4>Office Location</h4>
            <p>
                <?= get_option('qs_contact_street2'); ?>
            </p>
            <p>
                <?= get_option('qs_contact_city2'); ?>,
                <?= get_option('qs_contact_state2'); ?>
                <?= get_option('qs_contact_zip2'); ?>
            </p>
        </div>
        <div class="col-md-4 text-center">
            <h4>Phone Numbers</h4>
            <p>Tel: <a href="tel:<?= get_option("qs_contact_phone2"); ?>"><?= get_option("qs_contact_phone2"); ?></a></p>
            <p>Fax: <?= get_option("qs_contact_fax2"); ?></p>
        </div>
    </div>



</section> <!-- /.wrap .container-->

<?php 
	// No comments on homepage
	//comments_template();
?>

<?php get_footer(); ?>