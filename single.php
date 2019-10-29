<?php global $post; $content = $post->post_content; ?>
<?php get_header(); ?>

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
				<?php echo apply_filters( 'the_content', $content);?>
			</div>
			
			<div class="snt-blog-sidebar col-md-2">
				<h4>Published</h4>
				<span class="snt-blog-date"><?php echo get_the_date('Y / m / d'); ?></span>
				<h4>Read time</h4>
					<span>8 min</span>
				<!-- <h4>Skip to</h4>
				<ul>
					<li>The Silver Lining</li>
					<li>The Meta</li>
					<li>No realy, meet the team</li>
				</ul> -->
			</div>

		</div>
	</div>

	<div class="snt-blog-footer">
		<div class="row">
			<div class="col-md-8 col-md-offset-2"><hr></div>
			<div class="col-md-1 col-md-offset-2">
				<img src="<?php echo get_template_directory_uri().'/imgs/blog-author-img.png'?>" width="110" height="110"  alt="">
			</div>
			<div class="snt-blog-author col-md-7">
				<h4>written by</h4>
				<h3 class="text-left">Simun Strukan</h3>
				<p class="text-left">Co-founder | CTO @ Sintezis Startup Studio</p>
			</div>
		</div>

		
		<div class="snt-blog-posts row">
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
		</div>

		<div class="row">
			<div class="col-md-12">
				<button class="snt-btn btn" onclick="" >VIEW MORE ARTICLES</button>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
</div>