
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

<?php get_footer(); ?>