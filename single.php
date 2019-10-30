
<?php get_header(); the_post();?>

	<div class="row">
		<div class="col-md-12">
			<img class="snt-blog-header" src="<?php echo get_template_directory_uri().'/imgs/blog-header-lg.png'?>" width="100%" alt="">
		</div>
	</div>

	<div class="snt-blog-container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<h4><?php echo apply_filters( 'plugins/wp_subtitle/get_subtitle', '') ?></h4>
				<h2><?php the_title(); ?></h2>
				<div class="snt-blog-content"><?php the_content() ?></div>
			</div>
			
			<div class="snt-blog-sidebar col-md-2">
				<h4>Published</h4>
				<span class="snt-blog-date"><?php echo get_the_date('Y / m / d'); ?></span>
				<h4>Read time</h4>
				<span><?php echo do_shortcode("[reading_time]") ?></span>
			</div>

		</div>
	</div>

	<div class="snt-blog-footer">
		<div class="snt-blog-author row">
			<div class="col-md-8 col-md-offset-2"><hr></div>
			<div class="col-md-1 col-md-offset-2">
				<?php echo get_avatar($post->post_author, 110); ?>
			</div>
			<div class="col-md-7">
				<h4>written by</h4>
				<h3 class="text-left"><?php the_author_meta('display_name', $post->post_author); ?></h3>
				<p class="text-left"><?php the_author_meta('description', $post->post_author); ?></p>
			</div>
		</div>

		
		<!-- <div class="snt-blog-posts row">
			<div class="col-md-4 col-md-offset-2">
				<h3>More from our blog</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-2">
				<img src="<?php echo get_template_directory_uri().'/imgs/blog-bg-md-placeholder-1.png'?>" width="100%" alt="">
			</div>
			<div class="col-md-4">
					<img src="<?php echo get_template_directory_uri().'/imgs/blog-bg-md-placeholder-2.png'?>" width="100%" alt="">
			</div>
		</div> -->

		<div class="row">
			<div class="col-md-12">
				<button class="snt-btn btn" onclick="window.location.href='/blog'">VIEW MORE ARTICLES</button>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
</div>