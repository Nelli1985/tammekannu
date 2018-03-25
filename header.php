
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Tammekännu puhkemaja">
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
  </head>

  <body>
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
          <h1 class="blog-masthead">Tammakännu</h1>
        </div>
        <div class="col-lg-4 col-lg-offset-4">
          <img src="tammek2nnu_logo2.png" class="media-object" style="width:100px">
        </div>
        <div class="col-lg-4 col-lg-offset-4">
          <h1 class="blog-masthead">Puhkekeskus</h1>
        </div>
      </div>
      <div class="navbar-collapse justify-content-md-center">
        <ul class="navbar blog-nav nav">
          <li class="nav-item actve">
            <a class="blog-nav-item active" href="#">Majutus</a>
            <?php wp_list_pages( '&title_li=' ); ?>
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
        </ul>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title text-center">Soovime teile meeldejäävat puhkust</h1>
        <h1 class="blog-title text-center">Tammekännu Puhkekeskuses!</h1>
      </div>