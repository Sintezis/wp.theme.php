	<div class="snt-footer-section">
    <div class="row" style="padding-top: 43.5%">
      <div class="col-md-4 col-md-offset-2">
        <div class="snt-address-container">
          <h3>Sintezis Startup Studio Limited</h3>
          <p>Ground floor 8-9, Marino Mart</p>
          <p>Dublin 3, D03P590</p>
          <p>Ireland</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="snt-contact-container">
          <h3>Connect with Us</h3>
          <p>www.sintezis.co</p>
          <p>info@sintezis.co</p>
          <a href="https://www.facebook.com/sintezisco/" target="_blank"><img src="<?php echo get_template_directory_uri().'/imgs/icon_social_fb.png'?>" class="pull-right" width="35" height="35" alt=""></a>
          <a href="https://www.linkedin.com/company/sintezis" target="_blank"><img src="<?php echo get_template_directory_uri().'/imgs/icon_social_li.png'?>"  class="pull-right" width="35" height="35" alt=""></a>
          <a href="https://twitter.com/SintezisLtd" target="_blank"><img src="<?php echo get_template_directory_uri().'/imgs/icon_social_tw.png'?>" class="pull-right" width="35" height="35" alt=""></a>
          <a href="https://www.instagram.com/sintezisco/" target="_blank"><img src="<?php echo get_template_directory_uri().'/imgs/icon_social_insta.png'?>" class="pull-right" width="35" height="35" alt=""></a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <p class="snt-copyright">Copyright © 2020 Sintezis - All right reserved</p>
      </div>
    </div>

</div>
      

</div>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled and minified Bootstrap 3 JavaScript  -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- <script src="js/main.js" type="text/javascript"></script> -->

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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-57238963-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-57238963-2');
</script>
