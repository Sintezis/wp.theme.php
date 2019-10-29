	<section class="snt-footer-section">
    <div class="row" style="padding-top: 35%;">
      <div class="col-md-6">
        <div class="snt-address-container">
          <h3>Sintezis Startup Studio Ltd.</h3>
          <p>Ground floor 8-9, Marino Mart, Dublin 3, D03P590</p>
          <p>Dublin 3, D03P590,</p>
          <p>Ireland</p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="snt-contact-container">
          <h3>Connect with Us</h3>
          <p>www.sintezis.co</p>
          <p>info@sintezis.co</p>
          <p>+285 98 1624 339</p>
          <img src="<?php echo get_template_directory_uri().'/imgs/icon_social_fb.png'?>" class="pull-right" width="35" height="35" alt="">
          <img src="<?php echo get_template_directory_uri().'/imgs/icon_social_li.png'?>"  class="pull-right" width="35" height="35" alt="">
          <img src="<?php echo get_template_directory_uri().'/imgs/icon_social_tw.png'?>" class="pull-right" width="35" height="35" alt="">
          <img src="<?php echo get_template_directory_uri().'/imgs/icon_social_insta.png'?>" class="pull-right" width="35" height="35" alt="">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <p class="snt-copyright">Copyright © 2020 Sintezis - All right reserved</p>
      </div>
    </div>

  </section>
      

</div>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled and minified Bootstrap 3 JavaScript  -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="js/main.js" type="text/javascript"></script>

<!-- Initialize Bootstrap functionality -->
<script>
  // Initialize tooltip component
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

  $(function () {
    if ($(".snt-waypoint").length > 0) {
      var waypointOffset = $(".snt-waypoint").offset().top;

      // hide nav bar for new user, display it on scroll to content section
      $(window).scroll( function () { 
        if ($(document).scrollTop() > waypointOffset) { 
          $(".snt-nav-bar").fadeIn()
        } else {
          $(".snt-nav-bar").fadeOut()
        }
      });  
    }
    else {
      $(".snt-nav-bar").fadeIn()
    }
  })
</script>