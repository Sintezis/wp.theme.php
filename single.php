<?php get_header(); the_post();?>
<section  class="snt-blog-container">
	<div class="container">
		<div class="row">
		<div class="col-md-12 bg-img">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" alt="image description" class="custom_header" />	
		</div>
			<div class="col-md-9">
				<h4><?php echo apply_filters( 'plugins/wp_subtitle/get_subtitle', '') ?></h4>
				<h2><?php the_title(); ?></h2>
				<div class="snt-blog-content"><?php the_content() ?></div>
			</div>
			
			<div class="snt-blog-sidebar col-md-3">
				<h4>Published</h4>
				<span class="snt-blog-date"><?php echo get_the_date('Y / m / d'); ?></span>
				<h4>Read time</h4>
				<span><?php echo do_shortcode("[reading_time]") ?></span>
			</div>
		</div>
	</div>
</section>

<section class="snt-blog-footer">
	<div class="container">
		<div class="snt-blog-author row">
			<div class="col-md-12"><hr></div>
			<div class="col-md-2">
				<?php echo get_avatar($post->post_author, 110); ?>
			</div>
			<div class="col-md-7">
				<h4>written by</h4>
				<h3 class="text-left"><?php the_author_meta('display_name', $post->post_author); ?></h3>
				<p class="text-left"><?php the_author_meta('description', $post->post_author); ?></p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<button class="snt-btn btn" onclick="window.location.href='/blog'">VIEW MORE ARTICLES</button>
			</div>
		</div>
	</div>
	</section>

	<div class="container" style="margin-top:100px;">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
      <h4 style="margin-bottom: 40px"> Would you like to be the first to read our newest posts? Signup here!</h4>
        <?php echo do_shortcode("[wpforms id='403']")?>
      </div>
		  </div>
    </div>

<?php get_footer(); ?>
