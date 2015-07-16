<!DOCTYPE html>
<!--[if IE 7]><html id="ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html id="ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php if ( esc_url( get_option( 'ace_favicon' ) ) ) { echo esc_url( get_option( 'ace_favicon' ) ); } else { echo get_stylesheet_directory_uri(); echo "/images/favicon.gif"; } ?>" type="image/x-icon" />
<?php wp_head(); ?>
<?php echo ace_header_scripts() || ace_css() || ace_theme_css(); ?>
</head>

<body <?php body_class(); ?>>

<section class="container">

<aside class="aside" role="complementary">

  <header class="header" role="banner">
    <?php echo ace_heading(); ?>
  </header><!-- .header -->


  <div style = "text-align:center; margin-top:-30px">
    <p>

      <a href="https://www.google.com/maps/place/West+Side+Salon/@37.811328,-121.996685,15z/data=!4m2!3m1!1s0x0:0x5db18f6846416e7f?sa=X&amp;ved=0CH8Q_BIwC2oVChMIgrLv-IOLxgIVBJqICh2KjQA2">
        West Side Salon<br>
        407 Sycamore Valley Rd W<br>
        Danville, California
      </a>
    </p>
    <p> 
      <a href="tel: 19259845750">(925) 984-5750</a>
    </p>
  </div>


<main>
  <article class="side-menu">
    <?php if ( get_option( 'ace_side_menu' ) == true ) {} else { ?>
    <nav class="nav" role="navigation">
      <?php wp_nav_menu( 'theme_location=side_menu&container_class=menu&menu_class=menu&fallback_cb=false&show_home=1' ); ?>
    </nav><!-- .nav -->
    <?php } ?>
  </article>

  <?php if ( is_active_sidebar( 'left-widget' ) ) : dynamic_sidebar( 'left-widget' ); endif; ?>

</aside><!-- .aside -->

<?php echo ace_theme_slider(); ?>