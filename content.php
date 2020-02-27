<?php 
	// the query
	$posts = get_posts( array(
    'numberposts' => 3,
	));
 
?>

<?php if (!empty($posts)) : ?>
<section id="blog" class="snt-blog-section">
	
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h4>THE SINTEZIS BLOG</h4>
			<h1>Things We've Learned <br> On The Way</h1>
		</div>
	</div>

	<div class="row">
	<?php if (count($posts) > 1) : ?>

			<div class="col-md-6 col-md-offset-1">
				<div class="snt-blog-header-lg">
					<h2><a href="<?php echo esc_url(get_post_permalink($posts[0])) ?>"><?php echo apply_filters( 'the_title', $posts[0]->post_title);?></a></h2>
					<span class="snt-blog-date"><?php echo date('Y / m / d', strtotime($posts[0]->post_date_gmt)); ?></span>
					<p class="snt-blog-description"><?php echo apply_filters( 'get_the_excerpt', $posts[0]->post_excerpt); ?></p>
				</div>
			</div>

			<div class="col-md-4 " placeholder="failure">
				<div class="row">
					<div class="snt-blog-header-md snt-blog-header-ph-1">
						<h2><a href="<?php echo esc_url(get_post_permalink($posts[1])) ?>"><?php echo apply_filters( 'the_title', $posts[1]->post_title);?></a></h2>
				<span class="snt-blog-date"><?php echo date('Y / m / d', strtotime($posts[1]->post_date_gmt)); ?></span>
					</div>
				</div>

				<div class="row ">
					<div class="snt-blog-header-md snt-blog-header-ph-2">
						<h2><a href="<?php echo esc_url(get_post_permalink($posts[2])) ?>"><?php echo apply_filters( 'the_title', $posts[2]->post_title);?></a></h2>
				<span class="snt-blog-date"><?php echo date('Y / m / d', strtotime($posts[2]->post_date_gmt)); ?></span>
					</div>
				</div>
			</div>

			
		<?php wp_reset_postdata(); ?>
	
	<?php else : ?>

		<div class="col-md-8 col-md-offset-2">
			<div class="snt-blog-header-lg">
				<h2><a href="<?php echo esc_url(get_post_permalink($posts[0])) ?>"><?php echo apply_filters( 'the_title', $posts[0]->post_title);?></a></h2>
				<span class="snt-blog-date"><?php echo date('Y / m / d', strtotime($posts[0]->post_date_gmt)); ?></span>
				<p class="snt-blog-description"><?php echo apply_filters( 'get_the_excerpt', $posts[0]->post_excerpt); ?></p>
			</div>
		</div>

	<?php endif; ?>

		<div class="row">
			<div class="col-md-12">
				<button class="snt-btn btn center-block" onclick="window.location.href='/sintezisdemo/#blog'">VIEW MORE ARTICLES</button>
			</div>
		</div>
		
	</div>
</section>

<?php endif; ?>