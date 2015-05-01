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

	<!-- Nav tabs -->
	<div id="nav-tabs">

	  <ul class="nav nav-tabs nav-justified" role="tablist" id="locations">
	    <li class="glendale active">
	   		<a data-target="#glendale" class="btn btn-link" role="tab" data-toggle="tab">
	   		<?php $post = get_post(2); $content = apply_filters('the_title', $post->post_title); echo $content;?></a></li>
	    <li class="mineola">
	   		<a data-target="#mineola" class="btn btn-link" role="tab" data-toggle="tab">
	   		<?php $post = get_post(13); $content = apply_filters('the_title', $post->post_title); echo $content;?></a></li>
	  </ul>

	</div>
	<!-- END Nav tabs -->


	<!-- Tab panes -->
	<div class="tab-content">
	    <div role="tabpanel" class="tab-pane fade in active content" id="glendale">
			
			<div class="row">
				<div class="margin-bottom col-md-8">
					<?php $post = get_post(2); $content = apply_filters('the_content', $post->post_content); echo $content;?>
				</div>
				<div class="col-md-4">
					<?php get_template_part('doctor-images'); ?>
				</div>
			</div>

			<div class="row">		
				<div id="contact" class="col-md-12">
					<h2>Contact Us<span class="contact">- <?php $post = get_post(2); $content = apply_filters('the_title', $post->post_title); echo $content;?></span></h2>
					<div class="header"></div>
					<div class="insurance">
						<?php $post = get_post(67); $content = apply_filters('the_content', $post->post_content); echo $content;?>
					</div>
				</div>
			</div>

			<div class="row content">
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

			<div class="map">
	 			<div id="glendale-map">
					<img src="#" alt="Static fallback image"/>
				</div>
	 		</div>	
		</div>
	<!--  END PANEL #glendale -->

	    <div role="tabpanel" class="tab-pane fade content" id="mineola">

			<div class="row">
				<div class="margin-bottom col-md-8">
					<?php $post = get_post(13); $content = apply_filters('the_content', $post->post_content); echo $content;?>
				</div>
				<div class="col-md-4">
					<?php get_template_part('doctor-images-2'); ?>
				</div>
			</div>

			<div class="row">		
				<div id="contact-m" class="col-md-12">
					<h2>Contact Us<span class="contact">- <?php $post = get_post(13); $content = apply_filters('the_title', $post->post_title); echo $content;?></span></h2>
					<div class="header"></div>
					<div class="insurance">
						<?php $post = get_post(67); $content = apply_filters('the_content', $post->post_content); echo $content;?>
					</div>
				</div>
			</div>

			<div class="row content">
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

			<div class="map">
	 			<div id="mineola-map">
					<img src="#" alt="Static fallback image"/>
				</div>
	 		</div>	
		</div>
	<!-- END PANEL #mineola -->

	</div>
	

	<!-- END Tab panes -->

</section> <!-- /.wrap .container-->

<?php 
	// No comments on homepage
	//comments_template();
?>

<?php get_footer(); ?>