<?php get_header(); ?>
 <section id="welcome" class="snt-welcome-section">
		  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10">
        <div class="snt-welcome-container">
          <div class="row">
              <div class="col-md-8 col-md-offset-4">
                <img class="snt-logo" src="http://www.sintezis.co/wp-content/themes/wp.theme.php/imgs/logo-white.png" alt="">
                <h2>Transforming abstract ideas into digital products</h2>
                <p class="subtitle">We bring order to your creative chaos and make things fit perfectly together. We build, so you can dream.</p>
                <button class="snt-btn btn" onclick="window.location.href='#projects'">SEE OUR WORK <img src="http://www.sintezis.co/wp-content/themes/wp.theme.php/imgs/arrow-bottom.png" width="24" height="24" alt=""></button>
              </div>
          </div>
        </div>
      </div>
              </div>
    </div>
    <div class="snt-waypoint"></div>
  </section>

  <section id="projects" class="snt-portfolio-section">
	  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-2">
        <h4>IDEAS WE BROUGHT TO LIFE</h4>
        <h1>Our Latest Work</h1>
      </div>
    </div>

    <div class="row">
		<div class="container">
      <div class="col-md-12">
        <!-- carousel -->
        <div id="portfolio-slider" class="snt-carousel carousel slide"> 
          
          <div class="snt-carousel-content carousel-inner" role="listbox">
            
            <!-- Slide 1 -->
            <div class="snt-carousel-item item active">
              <div class="row row-eq-height">
                <div class="col-md-5 col-md-offset-1"><img src="<?php echo get_template_directory_uri().'/imgs/portfolio-elude.png'?>" alt="Republish"></div>
                <div class="snt-protfolio-content col-md-5">
                  <div class="snt-portfolio-item-txt">
                    <h3>Elude iOS App</h3>
					<p>Travel on a budget, you define it and Elude app finds it. The Elude app lets you find the best travel arrangements within your budget by searching the best flights and hotels for the destination of your choosing.</p>
					<button class="apple_store">
						<p class="apple_p">APPLE STORE</p>
					</button>
                  </div>
                </div>
              </div>
            </div>
    
            <!-- Slide 2 -->
            <div class="snt-carousel-item item">
              <div class="row row-eq-height">
                <div class="col-md-5 col-md-offset-1"><img src="<?php echo get_template_directory_uri().'/imgs/portfolio-republish.png'?>" alt="Republish"></div>
                <div class="snt-protfolio-content col-md-5">
                  <div class="snt-portfolio-item-txt">
                    <h3>Republish iOS App</h3>
                    <p>A clean and stylish iOS applications that you can use to share interesting content with friends. No need to search for everybody because you are automatically connected with all your phone contacts, even if you don’t sign in! Forget about clutter and ads, just content in a beautiful, centralized timeline we are calling </p>
					<button class="apple_store">
						<p class="apple_p">APPLE STORE</p>
					</button>
				</div>
                </div>
              </div>
            </div>

            <!-- Slide 3 -->
            <div class="snt-carousel-item item">
              <div class="row row-eq-height">
                <div class="col-md-5 col-md-offset-1"><img src="<?php echo get_template_directory_uri().'/imgs/portfolio-fooc.png'?>" alt="Republish"></div>
                <div class="snt-protfolio-content col-md-5">
                  <div class="snt-portfolio-item-txt">
                    <h3>Fooc iOS App</h3>
					<p>If you need to find a buddy for your football or basketball game, Fooc can help you with that. Select the number of players you are looking for, put the game court on the map and wait a while. Someone will join in.</p>
					<button class="apple_store">
						<p class="apple_p">APPLE STORE</p>
					</button>
				</div>
                </div>
              </div>
            </div>
			</div>
          </div>

          <!-- Previous/Next controls -->
          <a class="left carousel-control" href="#portfolio-slider" role="button" data-slide="prev">
            <img class="snt-carousel-control-icon snt-carousel-control-prev" src="<?php echo get_template_directory_uri().'/imgs/arrow-left-grey.png'?>" alt="">
            <span class="sr-only">Previous</span>
          </a>
          
          <a class="right carousel-control" href="#portfolio-slider" role="button" data-slide="next">
              <img class="snt-carousel-control-icon snt-carousel-control-next" src="<?php echo get_template_directory_uri().'/imgs/arrow-right-grey.png'?>" alt="">
            <span class="sr-only">Next</span>
          </a>

          <!-- Indicators -->
          <ol class="carousel-indicators" style="bottom: -40px;">
            <li data-target="#portfolio-slider" data-slide-to="0"></li>
            <li data-target="#portfolio-slider" data-slide-to="1"></li>
            <li data-target="#portfolio-slider" data-slide-to="2"></li>
          </ol>
          
        </div>

      </div>
		</div>
    </div>
  </section>

  <section id="services" class="snt-services-welcome-section" style="margin-top: 100px;">
	  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-2">
        <h4>WHAT WE EXCEL AT</h4>
        <h1>Services we offer</h1>
      </div>
    </div>
	  </div>

	  <div class="container">
    <div class="row">
      <div class="col-md-12">
        
        <div class="row">
        
          <div class="welcome-col-md-4 col-md-4 col-sm-4">
			  <button class="welcome-services-button">
				<img src="<?php echo get_template_directory_uri().'/imgs/Vector_desktop.png'?>" class="center-block" alt="">
				<h3 style="margin-top: 40px;">Product Design</h3>
				<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet libero eu lectus lobortis scelerisque. Etiam congue eget mauris ac auctor.</p>
			  </button>
          </div>
        
          <div class="welcome-col-md-4 col-md-4 col-sm-4">
		 	 <button class="welcome-services-button">
				<img src="<?php echo get_template_directory_uri().'/imgs/Rocket_desktop.png'?>" class="center-block" alt="">
				<h3 style="margin-top: 40px;">Product Development</h3>
				<p class="text-center">Phasellus vel mattis purus. Fusce consequat urna in mattis tempor. In quis iaculis nunc. Fusce id felis ullamcorper lacus condimentum dapibus.</p>
			 </button>
          </div>
        
          <div class="welcome-col-md-4 col-md-4 col-sm-4">
			<button class="welcome-services-button">
				<img src="<?php echo get_template_directory_uri().'/imgs/Software_desktop.png'?>" class="center-block" alt="">
				<h3 style="margin-top: 30px;">Consulting</h3>
				<p class="text-center">Vivamus hendrerit, quam sit amet laoreet dictum, urna sem tristique massa, sit amet consequat ante ligula eu nisl. Nam et est aliquet, porttitor neque et, sollicitudin diam. Etiam quis ante vel ligula rutrum aliquet.</p>
			</button>
		  </div>
		  
		  <div class="col-md-12 text-center service-btn" style="margin-bottom:100px;">
		  	<button class="snt-btn" onclick="window.location.href='/services'"=>SEE ALL SERVICES</button>
		  </div>
        </div>

      </div>
		  </div>
    </div>
  </section>

  <section class="snt-cta-section">
	  <div class="container">
    <div class="row snt-cta-row-bg">
      <div class="col-md-12">
        <h4>TAKE ACTION</h4>
        <h1>You have an abstract software idea <br> that needs some Sintezis?</h1>
        <p>Let's talk about it</p>
        <div class="col-md-12 text-center">
<button class="btn snt-btn" onclick="window.location.href='#contact'">GET IN TOUCH</button>
</div>
      </div>
    </div>
	  </div>
  </section>

  <section id="testimonials" class="snt-testimonials-section" style="margin-top:100px; margin-bottom: 100px;">
	  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-2">
        <h4>OUR CLIENTS ABOUT US</h4>
        <h1>Testimonials</h1>
		</div>
      </div>
    </div>

	  <div class="container">
     <div class="row">
      <div class="col-md-12">

	  <!-- carousel -->
	  <div id="portfolio-slider" class="snt-carousel carousel slide" data-ride="carousel"> 
          
          <div class="snt-carousel-content carousel-inner" role="listbox">
        
        <div class="row">
        
          <div class="col-md-3 col-md-offset-1">
            <p class="punctuation-up center-block"></p>
            <p class="punctuation-p">Ante metus dictum at tempor commodo ullamcorper a lacus vestibulum. Hendrerit gravida rutrum quisque non tellus orci ac auctor. Lectus magna fringilla urna porttitor rhoncus. Eget dolor morbi non arcu risus quis. Dolor purus non enim praesent elementum facilisis. Id semper risus in hendrerit gravida rutrum quisque non.</p>
            <p class="punctuation-down center-block"></p>
            <div class="row">
              <div class="col-md-4">
				<div class="snt-social-block center-block" style="display: inline-flex; width:100%; margin-top: 20px;">
					<img src="<?php echo get_template_directory_uri().'/imgs/photo-silvije.png'?>" alt="">
				<div style="margin-left:10px;">
					<p class="name">Silvije S. Kranjčević</p>
					<p class="position">CTO</p>
				</div>
			</div>
              </div>
            </div>
			</div>
        
		  <div class="col-md-3">
            <p class="punctuation-up center-block"></p>
            <p class="punctuation-p">Ante metus dictum at tempor commodo ullamcorper a lacus vestibulum. Hendrerit gravida rutrum quisque non tellus orci ac auctor. Lectus magna fringilla urna porttitor rhoncus. Eget dolor morbi non arcu risus quis. Dolor purus non enim praesent elementum facilisis. Id semper risus in hendrerit gravida rutrum quisque non.</p>
            <p class="punctuation-down center-block"></p>
            <div class="row">
              <div class="col-md-4">
				<div class="snt-social-block center-block" style="display: inline-flex; width:100%; margin-top: 20px;">
					<img src="<?php echo get_template_directory_uri().'/imgs/photo-someone.png'?>" alt="">
				<div style="margin-left:10px;">
					<p class="name">Someone Elsić</p>
					<p class="position">CTO</p>
				</div>
			</div>
              </div>
            </div>
            
          </div>
        
          <div class="col-md-3">
            <p class="punctuation-up center-block"></p>
            <p class="punctuation-p">Ante metus dictum at tempor commodo ullamcorper a lacus vestibulum. Hendrerit gravida rutrum quisque non tellus orci ac auctor. Lectus magna fringilla urna porttitor rhoncus. Eget dolor morbi non arcu risus quis. Dolor purus non enim praesent elementum facilisis. Id semper risus in hendrerit gravida rutrum quisque non.</p>
            <p class="punctuation-down center-block"></p>
            <div class="row">
              <div class="col-md-4">
				<div class="snt-social-block center-block" style="display: inline-flex; width:100%; margin-top: 20px;">
					<img src="<?php echo get_template_directory_uri().'/imgs/photo-loremka.png'?>" alt="">
				<div style="margin-left:10px;">
					<p class="name">Loremka Ipsumović</p>
					<p class="position">CTO</p>
				</div>
			</div>
              </div>
            </div>
            
		  </div>
		  
		  <!-- Previous/Next controls -->
          <a class="left carousel-control" href="#portfolio-slider" role="button" data-slide="prev">
            <img class="snt-carousel-control-icon snt-carousel-control-prev" src="<?php echo get_template_directory_uri().'/imgs/arrow-left-grey.png'?>" alt="">
            <span class="sr-only">Previous</span>
          </a>
          
          <a class="right carousel-control" href="#portfolio-slider" role="button" data-slide="next">
              <img class="snt-carousel-control-icon snt-carousel-control-next" src="<?php echo get_template_directory_uri().'/imgs/arrow-right-grey.png'?>" alt="">
            <span class="sr-only">Next</span>
          </a>

          <!-- Indicators -->
          <ol class="carousel-indicators" style="bottom: -40px;">
            <li data-target="#portfolio-slider" data-slide-to="0" class="active"></li>
            <li data-target="#portfolio-slider" data-slide-to="1"></li>
            <li data-target="#portfolio-slider" data-slide-to="2"></li>
          </ol>
			  </div>
		  </div>
			  </div></div>
		  </div>
    </div>
  </section>


  <?php get_template_part( 'content', get_post_format() ); ?>

  <section id="contact" class="snt-contact-section">
	  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-2">
        <h4>FIRST CONTACT</h4>
        <h1>Send us a Message</h1>
        <p>Ready to talk? Contact us for a free consult and we’ll get back to you in 24 hours. You’re contact information is kept private and we will never send you spam.</p>
      </div>
		  </div>
    </div>

	  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <?php echo do_shortcode("[wpforms id='23' title='false' description='false']")?>
      </div>
		  </div>
    </div>
	</section>
	
<?php get_footer(); ?>