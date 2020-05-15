<?php 
	// the query
	$posts = get_posts( array(
    'numberposts' => 3,
	));
 
?>

<?php if (!empty($posts)) : ?>
<section id="blog" class="snt-blog-section">
	<div class="container">

	<div class="row">
		<div class="col-md-6 col-md-offset-2">
			<h4>THE SINTEZIS BLOG</h4>
			<h1>Things We've Learned <br> On The Way</h1>
		</div>
	</div>		
	</div>

	<div class="container">

	<div class="row">
	<?php if (count($posts) > 1) : ?>

		<div class="col-md-6">
			<button class="snt-blog-header-lg" onclick="window.location.href='http://beta.sintezis.co/is-it-time-for-you-to-dump-the-office-desk-and-start-working-remotely/'">
				<h2><a href="<?php echo esc_url(get_post_permalink($posts[0])) ?>"><?php echo apply_filters( 'the_title', $posts[0]->post_title);?></a></h2>
				<span class="snt-blog-date"><?php echo date('Y / m / d', strtotime($posts[0]->post_date_gmt)); ?></span>
				<p class="snt-blog-description"><?php echo apply_filters( 'get_the_excerpt', $posts[0]->post_excerpt); ?></p>
			</button>
		</div>

		<div class="col-md-6" placeholder="failure">
				<button class="snt-blog-header-md snt-blog-header-ph-2" style="margin-top: 0.1rem;" onclick="window.location.href='http://beta.sintezis.co/we-failed-plenty-so-you-dont-have-to/'">
					<h2><a href="<?php echo esc_url(get_post_permalink($posts[1])) ?>"><?php echo apply_filters( 'the_title', $posts[1]->post_title);?></a></h2>
			<span class="snt-blog-date"><?php echo date('Y / m / d', strtotime($posts[1]->post_date_gmt)); ?></span>
				</button>

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
	</div>

	<?php endif; ?>

		<div class="container">

		<div class="row">
			<div class="col-md-12">
				<button class="snt-btn btn center-block" onclick="window.location.href='/blog'">VIEW MORE ARTICLES</button>
			</div>
		</div>			
		</div>
		
	</div>
</section>

<?php endif; ?>