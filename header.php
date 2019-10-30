<!-- style guide rules 

1. use tabs instead of spaces! 
tab size: 2 

2. css classes order eg.
  <elm class="snt-custom-class bootstrap-class"></elm>

3. write short comment explanations for elements and events,
explain the code and keep it simple

4. !!WARNING!! html, header, body and similar tags are omttied for a reason, not by accident!
Checkout the following google style guide https://google.github.io/styleguide/htmlcssguide.xml

style guide rules end -->

<!doctype html>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<title><?php echo get_bloginfo( 'name' ); ?></title>

<!-- Latest compiled and minified Boostrap 3 CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=Barlow:100,300,400|Overpass:100,300,400,900" rel="stylesheet">

<link href="<?php echo get_stylesheet_directory_uri().'/css/navbar_style.css'; ?>" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri().'/css/main.css'; ?>" rel="stylesheet">
<!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"> -->


<!-- here we use body tag to add custom classes to it, no need to close it, or account it in tags hierarchy  -->
<body class="snt-body-bg">

<!-- content -->
<div class="snt-container snt-landing-container container-fluid">

  <nav class="snt-nav-bar navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="hidden-lg" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri().'/imgs/logomark.png'; ?>" class="navbar-brand" height="50" alt=""></a>
        <a class="hidden-md hidden-sm hidden-xs" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri().'/imgs/logo-white.png'; ?>" class="navbar-brand" height="50" alt=""></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo get_home_url().'/#welcome' ?>">Welcome</a></li>
          <li><a href="<?php echo get_home_url() .'/#projects'?>">Projects</a></li>
          <li><a href="<?php echo get_home_url() .'/#services'?>">Services</a></li>
          <li><a href="<?php echo get_home_url() .'/#team'?>">The Team</a></li>
          <li><a href="<?php echo get_home_url() .'/#career'?>">Career</a></li>
          <li><a href="<?php echo get_home_url() .'/#blog'?>">Blog</a></li>
          <li><a href="<?php echo get_home_url() .'/#contact'?>">Contact</a></li>
          <li><a href="/partnership">Partnership</a></li>
        </ul>
      </div>
    </div>
  </nav>