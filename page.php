
<?php get_header(); the_post();?>

<div class="row">
	<div class="col-md-12">
		<img class="snt-blog-header center-block" src="<?php echo get_template_directory_uri().'/imgs/page-header.png'?>" width="60%" alt="">
	</div>
</div>

<div class="snt-page-container">
	<div class="row">
		<div class="col-md-6 col-md-offset-2">
			<span class="snt-page-subtitle"><?php echo apply_filters( 'plugins/wp_subtitle/get_subtitle', '') ?></span>
			<h1><?php the_title(); ?></h1>
			<?php the_content() ?>
		</div>

		<div class="col-md-2">
			<div class="snt-toc-sidebar">
			<?php echo do_shortcode("[lwptoc]") ?>
			</div>
		</div>
		
	</div>
</div>

<div id="contact" class="snt-contact-section">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h4>FIRST CONTACT</h4>
			<h1>Send us a Message</h1>
			<p>Ready to talk? Contact us for a free consult and we’ll get back to you in 24 hours. You’re contact information is kept private and we will never send you spam.</p>
		</div>
	</div>

	<div class="row">
		
		<div class="col-md-4 col-md-offset-2">
			<input type="text" placeholder="Your Name">
		</div>
		
		<div class="col-md-4">
			<input type="text" placeholder="Your E-mail">
		</div>
		
		<div class="col-md-8 col-md-offset-2">
			<input type="text" placeholder="Subject">
		</div>
		
		<div class="col-md-8 col-md-offset-2">
			<input type="text" placeholder="Message">
		</div>

	</div>

	<div class="row" style="margin-top: 100px;">
		
		<div class="col-md-4 col-md-offset-2">
			
			<div class="snt-captcha">
				<img src="<?php echo get_template_directory_uri().'/imgs/captcha.png'?>" alt="">
			</div>

		</div>
		
		<div class="col-md-4"> 
			<button class="snt-btn btn">SEND</button>
		</div>

	</div>
</div>

<?php get_footer(); ?>