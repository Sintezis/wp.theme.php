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
					<h2>Boost your JavaScript Debugging Skills With These Console Tricks</h2>
					<span class="snt-blog-date">2019 / 02/ 22</span>
					<p class="snt-blog-description">The cookie-cutter way of debugging JavaScript code is to simply output the results via the console.log method. While it works, it’s not the most...</p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12">
						<div class="snt-blog-header-md snt-blog-header-ph-1">
						</div>
					</div>
				</div>

				<div class="row" style="margin-top: 20px;">
					<div class="col-md-12">
						<div class="snt-blog-header-md snt-blog-header-ph-2">
							<h2>Comparing iOS TableView and Android RecyclerView</h2>
							<span class="snt-blog-date">2019 / 02/ 22</span>
						</div>
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
				<button class="snt-btn btn center-block" onclick="window.location.href='/blog'">VIEW MORE ARTICLES</button>
			</div>
		</div>
		
	</div>
</section>

<?php endif; ?>