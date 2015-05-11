<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<div id="hero">
	<div class="jumbotron"></div>
</div>

<section id="home" class="wrap container">
    <div class="row">
        <div class="col-sm-12">
            <ul class="location">
                <li><a href="#"><i class="fa fa-map-marker"></i>
                    <?= get_option('qs_contact_city'); ?>,
                    <?= get_option('qs_contact_state'); ?>
                </a>
                    <br>
                    <a class="phone" href="#"><?= get_option('qs_contact_phone'); ?></a>
                </li>
                <li><a href="#"><i class="fa fa-map-marker"></i>
                    <?= get_option('qs_contact_city2'); ?>,
                    <?= get_option('qs_contact_state2'); ?>
                </a>
                    <br>
                    <a class="phone" href="#"><?= get_option('qs_contact_phone2'); ?></a>
                </li>
            </ul>
        </div>
    </div>
</section>

<section id="about" class="wrap container">

    <div class="row">
        <div class="col-md-8 col-centered">
            <h2><?php $post = get_post(2); $content = apply_filters('the_title', $post->post_title); echo $content;?></h2>
            <?php $post = get_post(2); $content = apply_filters('the_content', $post->post_content); echo $content;?>
        </div>
    </div>

</section>

<section id="physicians" class="wrap container">

    <div class="row">
        <div class="col-md-8 col-centered">
            <h2>Our Physicians</h2>
            <?php get_template_part('doctor-images'); ?>
        </div>
    </div>

</section>

<section id="insurance" class="wrap container">

    <div class="row">
        <div class="col-md-8 col-centered">
            <h2>Accepted Insurance</h2>
            <?php $post = get_post(67); $content = apply_filters('the_content', $post->post_content); echo $content;?>
        </div>
    </div>

</section>


<section id="offices">
    <div class="sidebar">
        <!-- Office One -->
        <div id="office1" class="office1">
            <h2><?= get_option('qs_contact_city'); ?></h2>
            <div class="info">

                <p><?= get_option('qs_contact_street'); ?><br>
                    <?= get_option('qs_contact_city'); ?>,
                    <?= get_option('qs_contact_state'); ?>
                    <?= get_option('qs_contact_zip'); ?><br></p>
                <p>Tel: <a href="tel:<?= get_option("qs_contact_phone"); ?>"><?= get_option("qs_contact_phone"); ?></a> | Fax: <?= get_option("qs_contact_fax"); ?></p>

                <h4>Office Hours</h4>
                <?php $post = get_post(9); $content = apply_filters('the_content', $post->post_content); echo $content;?>

            </div>

            <div class="office-btn">
                <div class="map1">
                    <a href="#" class="pan-to-marker" data-marker-index="0">View On Map</a> <!-- Show On Map -->
                </div>
                <div class="map2">
                    <a href="https://www.google.com/maps/place/South+Shore+Cardiovascular+Med:+Kumar+Raman+MD/@40.676059,-73.416459,17z/data=!3m1!4b1!4m2!3m1!1s0x89e9d4ffb8fd8be3:0x41dc0c4fb92f058b" class="mobile">View On Map</a>
                </div>

            </div><!-- /.office-btn -->
        </div><!-- /.office1 -->

        <!-- Office Two -->
        <div id="office2" class="office2">
            <h2><?= get_option('qs_contact_city2'); ?></h2>
            <div class="info">

                <p><?= get_option('qs_contact_street2'); ?><br>
                    <?= get_option('qs_contact_city2'); ?>,
                    <?= get_option('qs_contact_state2'); ?>
                    <?= get_option('qs_contact_zip2'); ?><br></p>
                <p>Tel: <a href="tel:<?= get_option("qs_contact_phone2"); ?>"><?= get_option("qs_contact_phone2"); ?></a> | Fax: <?= get_option("qs_contact_fax"); ?></p>

                <h4>Office Hours</h4>
                <?php $post = get_post(63); $content = apply_filters('the_content', $post->post_content); echo $content;?>

            </div>

            <div class="office-btn">
                <div class="map1">
                    <a href="#" class="pan-to-marker infoWindow" data-marker-index="1">View On Map</a> <!-- Show On Map -->
                </div>
                <div class="map2">
                    <a href="https://www.google.com/maps/place/South+Shore+Cardiovascular+Med:+Ruisi+John+A+MD/@40.676059,-73.416459,17z/data=!3m1!4b1!4m2!3m1!1s0x89e9d4ffb8fd8be3:0xc313259a3a4e2e85" class="mobile">View On Map</a>
                </div>
            </div><!-- /.office-btn -->

        </div><!-- /.office2 -->
    </div>

    <div class="map">
        <div id="map">
            <img src="#" alt="Static fallback image showing the location of South Shore Cardiovascular, West Islip"/>
        </div>
    </div>
</section>

<?php 
	// No comments on homepage
	//comments_template();
?>

<?php get_footer(); ?>