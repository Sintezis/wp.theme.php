<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="snt-blog-posts-container">
		<div class="row">
			<div class="col-md-2 col-md-offset-2">
				<img class="snt-blog-thumb" src="<?php echo get_template_directory_uri().'/imgs/blog-header-small-placholder-1.png'?>" alt="">
			</div>
			<div class="col-md-6">
				<h4 style="color:#FFC700;"><?php echo apply_filters( 'plugins/wp_subtitle/get_subtitle', '') ?></h4>
				<h2><a href="<?php esc_url(the_permalink()) ?>"><?php echo the_title(); ?></a></h2>
				<span class="snt-blog-date"> 
          <img src="<?php echo get_template_directory_uri().'/imgs/date-icon.png'?>" width="24" height="24" alt="">
          <?php echo get_the_date('j F, Y'); ?>
				</span>
				<p><?php echo  get_the_excerpt(); ?></p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-8 col-md-offset-2"><hr></div>
		</div>
  </div>
<?php endwhile; endif; ?>

<div class="container" style="margin-top:100px;">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
      <h4 style="margin-bottom: 40px"> Would you like to be the first to read our newest posts? Signup here!</h4>
        <?php echo do_shortcode("[wpforms id='403']")?>
      </div>
		  </div>
    </div>


<?php get_footer(); ?>