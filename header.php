<!DOCTYPE html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Tammekännu puhkekeskus">
    <meta name="author" content="Sandra Õnne, Kadi Kerner, Rain Kütt, Ave Kõrve-Noorkõiv, Andres Soop, Nelli Vassila">

    <title>
        <?php wp_title(''); ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Uncial+Antiqua');
     @import url('https://fonts.googleapis.com/css?family=PT+Sans');
  </style> 
  </head>

  <body>
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-5 col-lg-offset-4 flex-container">
			<div class="flex-item"><h1 class="blog-masthead">Tammekännu</h1></div>
        </div>
        <div class="col-lg-2 col-lg-offset-4">
          <a href="<?php echo get_option("siteurl"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/TK_logo_oranz.png" class="media-object" style="width:100px" alt="logo"></a>
        </div>
        <div class="col-lg-5 col-lg-offset-4 flex-container">
          <div class="flex-item"><h1 class="blog-masthead">Puhkekeskus</h1></div>
        </div>
      </div>
      <div class="navbar-collapse justify-content-md-center">
		<?php wp_nav_menu(); ?>
        <!--<ul class="navbar blog-nav nav">
          <li class="nav-item actve">
            <a class="blog-nav-item active" href="#">Majutus</a>
          </li>|
          <li class="nav-item">
              <a class="blog-nav-item" href="#">Paketid</a>
          </li>|
          <li class="nav-item">
            <a class="blog-nav-item" href="#">Tegevused</a>
          </li>|
          <li class="nav-item">
            <a class="blog-nav-item" href="#">Toidlustus</a>
          </li>|
          <li class="nav-item">
            <a class="blog-nav-item" href="#">Hinnakiri</a>
          </li>|
          <li class="nav-item">
            <a class="blog-nav-item" href="#">Kontakt</a>
          </li>
        </ul>-->
      </div>
    </div>
    

    <div class="container">