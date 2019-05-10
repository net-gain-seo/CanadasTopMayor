<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
   <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
   <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700,700i" rel="stylesheet">
    <?php wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133186056-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-133186056-1');
</script>

</head>

<body <?php body_class(); ?>>
<header class="container-fluid site-header">
    <div class="container flex-header">
      <div class="stickycontainer">
        <div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="CTMA Logo"></a></div>
        <div class="header-nav">
            <div class="container padding0">
                  <div class="mobile-icons">
                    <a href="javascript:void(0);" id="navToggle" class="nav-toggle">
                        <i class="fa fa-bars"></i>
                        <span>MENU</span>
                    </a>
                    <a href="<?php echo home_url(); ?>/nominate-now/" class="nav-contact">
                        <i class="fa fa-envelope"></i>
                        <span>NOMINATE NOW</span>
                    </a>
                </div>
                <nav id="mainNav" class="mobile-nav" role="navigation">
                  <a href="<?php echo home_url(); ?>/nominate-now/" class="get-quote">NOMINATE NOW</a>
                   <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => '' ) ); ?>
                </nav>
            </div>
        </div>
      </div>
    </div>
    <?php
    if ( is_front_page() ) {
      echo '<div id="videoplaceholder">';
      echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/eddA68hssEQ?autoplay=1&mute=1&controls=0&loop=1&playlist=MSu0NSMZuhs&amp;showinfo=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
      echo '</div>';
    } else {

    }
    ?>
</header>
<main>
