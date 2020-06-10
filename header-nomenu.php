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

<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri().'/imgs/favicon.png'; ?>" />

<!-- here we use body tag to add custom classes to it, no need to close it, or account it in tags hierarchy  -->
<body class="snt-body-bg">
	
	<head>
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
		<link rel="stylesheet" type="text/css" href="//wpcc.io/lib/1.0.2/cookieconsent.min.css"/><script src="//wpcc.io/lib/1.0.2/cookieconsent.min.js"></script><script>window.addEventListener("load", function(){window.wpcc.init({"border":"normal","corners":"large","colors":{"popup":{"background":"#f6f6f6","text":"#000000","border":"#555555"},"button":{"background":"#555555","text":"#ffffff"}},"position":"bottom","transparency":"10","content":{"href":"http://localhost:8888/sintezisdemo/cookie-policy/","link":"Learn more."}})});</script>
	</head>

<!-- content -->
<div class="snt-container snt-landing-container container-fluid">

  