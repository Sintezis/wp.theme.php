

  <section id="welcome" class="snt-welcome-section">
    <div class="row">
      <div class="col-md-10">
        <div class="snt-welcome-container">
          <div class="row">
              <div class="col-md-8 col-md-offset-4">
                <img class="snt-logo" src="<?php echo get_template_directory_uri().'/imgs/logo-white.png' ?>" alt="">
                <h2>Transforming abstract ideas into digital products</h2>
                <p class="subtitle">We bring order to your creative chaos and make things fit perfectly togeather. We build, so you can dream.</p>
                <button class="snt-btn btn" onclick="window.location.href='#projects'" >SEE OUR WORK <img src="<?php echo get_template_directory_uri().'/imgs/arrow-bottom.png' ?>" width="24" height="24" alt=""></button>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="snt-waypoint"></div>
  </section>

  <section id="projects" class="snt-portfolio-section">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <h4>IDEAS WE BROUGHT TO LIFE</h4>
        <h1>Our Latest Work</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <!-- carousel -->
        <div id="my-pics" class="snt-carousel carousel slide" data-ride="carousel"> 
          
          <div class="snt-carousel-content carousel-inner" role="listbox">
            
            <!-- Slide 1 -->
            <div class="snt-carousel-item item active">
              <div class="row">
                <div class="col-md-5 col-md-offset-1"><img src="<?php echo get_template_directory_uri().'/imgs/portfolio-republish.png'?>" alt="Republish"></div>
                <div class="col-md-5">
                  <h3>Republish iOS App</h3>
                  <p>A clean and stylish iOS applications that you can use to share interesting content with friends. No need to search for everybody because you are automatically connected with all your phone contacts, even if you don’t sign in! Forget about clutter and ads, just content in a beautiful, centralized timeline we are calling </p>
                </div>
              </div>
            </div>
    
            <!-- Slide 2 -->
            <div class="snt-carousel-item item">
              <div class="row">
                <div class="col-md-5 col-md-offset-1"><img src="<?php echo get_template_directory_uri().'/imgs/portfolio-republish.png'?>" alt="Republish"></div>
                <div class="col-md-5">
                  <h3>Republish iOS App</h3>
                  <p>A clean and stylish iOS applications that you can use to share interesting content with friends. No need to search for everybody because you are automatically connected with all your phone contacts, even if you don’t sign in! Forget about clutter and ads, just content in a beautiful, centralized timeline we are calling </p>
                </div>
              </div>
            </div>
    
          </div>

          <!-- Previous/Next controls -->
          <a class="left carousel-control" href="#my-pics" role="button" data-slide="prev">
            <img class="snt-carousel-control-icon snt-carousel-control-prev" src="<?php echo get_template_directory_uri().'/imgs/arrow-left-grey.png'?>" alt="">
            <span class="sr-only">Previous</span>
          </a>
          
          <a class="right carousel-control" href="#my-pics" role="button" data-slide="next">
              <img class="snt-carousel-control-icon snt-carousel-control-next" src="<?php echo get_template_directory_uri().'/imgs/arrow-right-grey.png'?>" alt="">
            <span class="sr-only">Next</span>
          </a>

          <!-- Indicators -->
          <ol class="carousel-indicators" style="bottom: -40px;">
            <li data-target="#my-pics" data-slide-to="0" class="active"></li>
            <li data-target="#my-pics" data-slide-to="1"></li>
          </ol>
          
        </div>

      </div>
    </div>
  </section>

  <section id="services" class="snt-services-section">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <h4>WHAT WE EXCEL AT</h4>
        <h1>Services we offer</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        
        <div class="row">
        
          <div class="col-md-4">
            <img src="<?php echo get_template_directory_uri().'/imgs/icon_designsprint.png'?>" class="center-block" alt="">
            <h3>Design Sprint</h3>
            <p>We include you in the proces with a week-long workshop helping shape your ideas into something tangible, both remotely or on-site.</p>
          </div>
        
          <div class="col-md-4">
            <img src="<?php echo get_template_directory_uri().'/imgs/icon_productdev.png'?>" class="center-block" alt="">
            <h3 style="margin-top: 40px;">Prodcut Development</h3>
            <p>We get to know you and your users, competition and domain space. We sketch, we prototype and we design usable software keeping the business needs in mind.</p>
          </div>
        
          <div class="col-md-4">
            <img src="<?php echo get_template_directory_uri().'/imgs/icon_dev.png'?>" class="center-block" alt="">
            <h3 style="margin-top: 40px;">Software Development</h3>
            <p>After measuring - we cut with passion. Our code is written for the long run, optimized for speed and efficiency. It makes your product come to life.</p>
          </div>

        </div>

      </div>

    </div>
  </section>

  <section class="snt-cta-section">
    <div class="row snt-cta-row-bg">
      <div class="col-md-6 col-md-offset-3">
        <h4>TAKE ACTION</h4>
        <h1>You have an abstract software idea <br> that needs some Sintezis?</h1>
        <p>Let's talk about it</p>
        <button class="btn snt-btn center-block" onclick="window.location.href='#contact'">GET IN TOUCH</button>
      </div>
    </div>
  </section>

  <section id="team" class="snt-team-section">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <h4>FACES BEHIND THE CODE</h4>
        <h1>Meet the Team</h1>
      </div>
    </div>

     <div class="row">
      <div class="col-md-10 col-md-offset-1">
        
        <div class="row">
        
          <div class="col-md-4">
            <img src="<?php echo get_template_directory_uri().'/imgs/photo_dbagaric.png'?>" class="center-block" alt="">
            <h3>Domagoj Bagaric</h3>
            <p>CEO</p>
            
            <div class="row">
              <div class="col-md-2 col-md-offset-5">
                <div class="snt-social-block center-block" style="width: 60px">
                  <img src="<?php echo get_template_directory_uri().'/imgs/icon_social_tw.png'?>">
                  <img src="<?php echo get_template_directory_uri().'/imgs/icon_social_li.png'?>">
                </div>
              </div>
            </div>
            
          </div>
        
          <div class="col-md-4">
            <img src="<?php echo get_template_directory_uri().'/imgs/photo_sstrukan.png'?>" class="center-block" alt="">
            <h3>Simun Strukan</h3>
            <p>CTO</p>

            <div class="row">
              
              <div class="col-md-4 col-md-offset-4">

                <div class="snt-social-block center-block" style="width: 90px">
                  <img src="<?php echo get_template_directory_uri().'/imgs/icon_social_insta.png'?>">
                  <img src="<?php echo get_template_directory_uri().'/imgs/icon_social_fb.png'?>">
                  <img src="<?php echo get_template_directory_uri().'/imgs/icon_social_li.png'?>">
                </div>
                
              </div>

            </div>
            
          </div>
        
          <div class="col-md-4">
            <img src="<?php echo get_template_directory_uri().'/imgs/photo_gcindric.png'?>" class="center-block" alt="">
            <h3>Gordon Cindric</h3>
            <p>Lead Product Designer</p>

            <div class="row">
              
              <div class="col-md-4 col-md-offset-4">

                <div class="snt-social-block center-block" style="width: 120px">
                  <img src="<?php echo get_template_directory_uri().'/imgs/icon_social_insta.png'?>">
                  <img src="<?php echo get_template_directory_uri().'/imgs/icon_social_fb.png'?>">
                  <img src="<?php echo get_template_directory_uri().'/imgs/icon_social_li.png'?>">
                  <img src="<?php echo get_template_directory_uri().'/imgs/icon_social_tw.png'?>">
                </div>
                
              </div>
              
            </div>

          </div>

        </div>
        <div class="row">
        
            <div class="col-md-4">
              <img src="<?php echo get_template_directory_uri().'/imgs/photo_ztomesic.png'?>" class="center-block" alt="">
              <h3>Zvonimir Tomesic</h3>
              <p>Lead Software Developer</p>

              <div class="row">
              
                <div class="col-md-4 col-md-offset-4">
  
                  <div class="snt-social-block center-block" style="width: 120px">
                    <img src="<?php echo get_template_directory_uri().'/imgs/icon_social_insta.png'?>">
                    <img src="<?php echo get_template_directory_uri().'/imgs/icon_social_fb.png'?>">
                    <img src="<?php echo get_template_directory_uri().'/imgs/icon_social_li.png'?>">
                    <img src="<?php echo get_template_directory_uri().'/imgs/icon_social_tw.png'?>">
                  </div>
                  
                </div>
                
              </div>

            </div>
          
            <div class="col-md-4">
              <img src="<?php echo get_template_directory_uri().'/imgs/photo_tpapic.png'?>" class="center-block" alt="">
              <h3>Tomislav Papic</h3>
              <p>Senior Web Developer</p>

              <div class="row">
              
                <div class="col-md-4 col-md-offset-4">
  
                  <div class="snt-social-block center-block" style="width: 120px">
                    <img src="<?php echo get_template_directory_uri().'/imgs/icon_social_insta.png'?>">
                    <img src="<?php echo get_template_directory_uri().'/imgs/icon_social_fb.png'?>">
                    <img src="<?php echo get_template_directory_uri().'/imgs/icon_social_li.png'?>">
                    <img src="<?php echo get_template_directory_uri().'/imgs/icon_social_tw.png'?>">
                  </div>
                  
                </div>
                
              </div>

            </div>
          
            <div class="col-md-4">
              <img src="<?php echo get_template_directory_uri().'/imgs/photo_tkozacinski.png'?>" class="center-block" alt="">
              <h3>Tomislav Kozacinski</h3>
              <p>Proudct Designer</p>

              <div class="row">
              
                <div class="col-md-4 col-md-offset-4">
  
                  <div class="snt-social-block center-block" style="width: 120px">
                    <img src="<?php echo get_template_directory_uri().'/imgs/icon_social_insta.png'?>">
                    <img src="<?php echo get_template_directory_uri().'/imgs/icon_social_fb.png'?>">
                    <img src="<?php echo get_template_directory_uri().'/imgs/icon_social_li.png'?>">
                    <img src="<?php echo get_template_directory_uri().'/imgs/icon_social_tw.png'?>">
                  </div>
                  
                </div>
                
              </div>

            </div>
  
          </div>

      </div>

    </div>
  </section>

  <section id="career" class="snt-jobs-section">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <h4>PASSION DRIVEN, HARD-WORKING, SMART</h4>
        <h1>We are Hiring</h1>
        <p>Sintezis a remote, paperless office with flexibale work hours. We focus on organising our workflow and process to work in our favor, applying the "work smart, not hard" approach. Sound good to you? Take a look at our open positions below. </p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3 col-md-offset-3">
        <button class="btn snt-btn">
          <span>Senior Backend Developer</span> <br>
          <p>5y, Java, Spring, PostgreSQL</p>
          <img src="<?php echo get_template_directory_uri().'/imgs/arrow-right.png'?>" width="24" height="24" class="pull-right" alt="">
        </button>
      </div>
      
      <div class="col-md-3">
        <button class="btn snt-btn">
          <span>UX  Designer</span> <br>
          <p>2y, Sketch, Figma, Zeplin</p>
          <img src="<?php echo get_template_directory_uri().'/imgs/arrow-right.png'?>" width="24" height="24" class="pull-right" alt="">
        </button>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3 col-md-offset-3">
        <button class="btn snt-btn">
          <span>UX  Designer</span> <br>
          <p>2y, Sketch, Figma, Zeplin</p>
          <img src="<?php echo get_template_directory_uri().'/imgs/arrow-right.png'?>" width="24" height="24" class="pull-right" alt="">
        </button>
      </div>
      <div class="col-md-3">
        <button class="btn snt-btn">
          <span>UX  Designer</span> <br>
          <p>2y, Sketch, Figma, Zeplin</p>
          <img src="<?php echo get_template_directory_uri().'/imgs/arrow-right.png'?>" width="24" height="24" class="pull-right" alt="">
        </button>
      </div>
    </div>

  </section>

  <?php get_template_part( 'content', get_post_format() ); ?>

  <section id="contact" class="snt-contact-section">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <h4>FIRST CONTACT</h4>
        <h1>Send us a Message</h1>
        <p>Ready to talk? Contact us for a free consult and we’ll get back to you in 24 hours. You’re contact information is kept private and we will never send you spam.</p>
      </div>
    </div>

    <div class="row">
      
      <div class="col-md-4 col-md-offset-2">
        <input type="text" placeholder="Your Name">
      </div>
      
      <div class="col-md-4">
        <input type="text" placeholder="Your E-mail">
      </div>
      
      <div class="col-md-8 col-md-offset-2">
        <input type="text" placeholder="Subject">
      </div>
      
      <div class="col-md-8 col-md-offset-2">
        <input type="text" placeholder="Message">
      </div>

    </div>

    <div class="row" style="margin-top: 100px;">
      <div class="col-md-4 col-md-offset-2">
        <div class="snt-captcha">
          <img src="<?php echo get_template_directory_uri().'/imgs/captcha.png'?>" alt="">
        </div>
      </div>
      <div class="col-md-4"> 
        <button class="snt-btn btn">SEND</button>
      </div>
    </div>


	</section>
	
<?php get_footer(); ?>