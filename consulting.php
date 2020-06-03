<?php get_header(); 
/*Template Name: Consulting */
?>

<section class="snt-cta-section">
	  <div class="container">
    <div class="row snt-cta-row-bg">
      <div class="col-md-12">
        <h4>TAKE ACTION</h4>
        <h1>You have an abstract software idea <br> that needs some Sintezis?</h1>
        <p>Let's talk about it</p>
        <div class="col-md-12 text-center">
<button class="btn snt-get-in-touch-btn" onclick="window.location.href='#contact'">GET IN TOUCH</button>
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
        
          <div class="welcome-col-md-6 col-md-6 col-sm-6">
			  <button class="welcome-services-button" onclick="window.location.href='/services/#product-design'">
				<img src="<?php echo get_template_directory_uri().'/imgs/icon_designsprint.png'?>" class="center-block" alt="" style="margin-bottom:59px;">
				<h0 style="margin-top: 40px;">Product Design</h0>
				<p class="text-center" style="margin-left: 50px; margin-right: 50px; margin-top:6px;">We imagine, create, and iterate products that solve your problems and address specific needs in your market.</p>
			  </button>
          </div>
        
          <div class="welcome-col-md-6 col-md-6 col-sm-6">
		 	 <button class="welcome-services-button" onclick="window.location.href='/services/#product-development'">
				<img src="<?php echo get_template_directory_uri().'/imgs/icon_productdev.png'?>" class="center-block" alt="" style="margin-bottom:59px;">
				<h0 style="margin-top: 40px;">Product Development</h0>
				<p class="text-center" style="margin-left: 50px; margin-right: 50px; margin-top:6px;">We get to know you and your users, competition and domain space. We sketch, we prototype and we design usable software keeping the business needs in mind.</p>
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

<div class="container">
    <div class="row">
	    <div class="col-sm-12 col-md-12 col-lg-12">
		    <h1 class="hero" style="margin-top: 100px; margin-bottom:40px;">About us</h1>
	    </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <p class="hero-p">We are full-service digital agency, focusing on getting our clients to the next level of their success, increasing the overall value of their idea.</p>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <p class="hero-p">Our core strengths are made of industry professionals startup founders and the top talent in Product, UX/UI, Software development. Our various backgrounds blended with one vision: create a repeatable, proven process for delivering top notch apps.</p>
        </div>
    </div>
</div>

  <section id="team" class="snt-team-section" style="margin-top: 100px; margin-bottom:40px;">
	<div class="container">
		
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <h4 class="yellow">FACES BEHIND THE CODE</h4>
        <h1>Meet The Team</h1>
      </div>
    </div>

     <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        
        <div class="row" style="margin-bottom:94px;">
        
          <div class="col-md-4 col-sm-4">
            <img src="<?php echo get_template_directory_uri().'/imgs/photo_dbagaric.png'?>" class="snt-team-pic center-block" alt="">
            <h3>Domagoj Bagaric</h3>
            <p>CEO</p>
			  <div class="text-center sm" style="margin-top: 30px;">
				                    <a href="https://twitter.com/bagijaner" target="_blank"><img src="<?php echo get_template_directory_uri().'/imgs/icon_social_tw.png'?>"></a>
                  <a href="https://www.linkedin.com/in/domagojbagaric" target="_blank"><img src="<?php echo get_template_directory_uri().'/imgs/icon_social_li.png'?>"></a>
			  </div>
           
          </div>
        
          <div class="col-md-4 col-sm-4">
            <img src="<?php echo get_template_directory_uri().'/imgs/photo_sstrukan.png'?>" class="snt-team-pic center-block" alt="">
            <h3>Simun Strukan</h3>
            <p>CTO</p>
			  <div class="text-center sm" style="margin-top: 30px;">
				  <a href="https://www.facebook.com/struki84" target="_blank"><img src="<?php echo get_template_directory_uri().'/imgs/icon_social_fb.png'?>"></a>  
				  <a href="https://www.instagram.com/struki84/" target="_blank"><img src="<?php echo get_template_directory_uri().'/imgs/icon_social_insta.png'?>"></a>
                 
                  <a href="https://www.linkedin.com/in/šimun-strukan-91a68169/" target="_blank"><img src="<?php echo get_template_directory_uri().'/imgs/icon_social_li.png'?>"></a>
			  </div>
            
          </div>

          <div class="col-md-4 col-sm-4">
              <div class="text-center">
                    <img src="<?php echo get_template_directory_uri().'/imgs/photo_ztomesic.png'?>" class="snt-team-pic center-block" alt="">
                    <h3>Zvonimir Tomesic</h3>
                    <p>Lead Software Developer</p>
                    <div class="text-center sm" style="margin-top: 30px;">
                      <a href="https://www.facebook.com/zvonimir.tomesic" target="_blank"><img src="<?php echo get_template_directory_uri().'/imgs/icon_social_fb.png'?>"></a>
                      <a href="https://www.linkedin.com/in/zvonimir-tomešić-970624141/" target="_blank"><img src="<?php echo get_template_directory_uri().'/imgs/icon_social_li.png'?>"></a>
                    </div>
              </div>  
            </div>
        
          
        </div>
  
          </div>

      </div>

	</div>
    </div>
  </section>

<section class="text-center snt-hire-section" style="margin-top: 100px; margin-bottom:200px;">
	<div class="container">
        <div class="text-center">  
            <div class="service-section">
                <img class="hire-photo">
                <h3 class="hire-h3">TAKE ACTION</h3>
                <h2 class="hire-h2 desktop">Ready to hire an awesome design & development team?</h2>
                <h2 class="hire-h2 mobile">You want to hire this awesome team?</h2>
                <p class="hire-p">Let us know!</p>
                <button class="snt-get-in-touch-btn"> GET IN TOUCH </button>
                <button class="snt-btn mobile"> VIEW OUR WORK </button>
            </div>
        </div>
	</div>
</section>
  <?php get_footer(); ?>