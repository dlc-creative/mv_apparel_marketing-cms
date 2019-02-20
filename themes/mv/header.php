<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php wp_title( '|', true, 'right' ); ?></title>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>

  <body>

    <header>
        <nav class="blog-nav">
          <div id="site-header">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              <img src="/wp-content/themes/daringreport/images/logo_collapsed.png">
            </a>
          </div>
<!--           <a class="blog-nav-item active" href="<?php echo get_bloginfo( 'wpurl' );?>">Home</a> -->
          <?php //wp_list_pages( '&title_li=' ); ?>
          <a href="#" class="toggler" onclick="return false;">
            <i class="bars"></i>
            <i class="bars"></i>
            <i class="bars"></i>
          </a>
        </nav>
    </header>

    <div id="mobile-navigation" role="navigation">
      <div class="menu-close"><i class="fa fa-times"></i></div>
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'after' => '<span class="opener"><i class="plus"></i></span>' ) ); ?>
    </div>

    <?php
    // $autoplay = 'autoplay loop';
    // $source;
    // $request = $_SERVER[REQUEST_URI];
    // $url = trim($request, '/');
    // switch($url) {
    //   case 'trend-1':
    //     $source = '/wp-content/themes/daringreport/video/trend-1-feature.mp4';
    //     break;
    //   case 'trend-2':
    //     $source = '/wp-content/themes/daringreport/video/trend-2-feature.mp4';
    //     break;
    //   case 'trend-3':
    //     $source = '/wp-content/themes/daringreport/video/trend-3-feature.mp4';
    //     break;
    //   case 'trend-4':
    //     $source = '/wp-content/themes/daringreport/video/trend-4-feature.mp4';
    //     break;
    //   case 'trend-5':
    //     $source = '/wp-content/themes/daringreport/video/trend-5-feature.mp4';
    //     break;
    //   default:
    //     $source = '/wp-content/themes/daringreport/video/cadbg.mp4';
    //     break;
    // }

    ?>
    <?php if (is_page('home')) : ?>
      <div class="feature-video">
        <video autoplay loop muted>
         <source src="/wp-content/themes/mv/video/feature.mp4" type="video/mp4" />
       </video>
    <?php endif; ?>

       <?php if (is_page('homepage')) : ?>
        <div class="featured-hero-title">
          <img src="/wp-content/uploads/2017/12/TheDaringReport-Logo.png" />
        </div>
      <?php endif; ?>
      <a href="#" class="scroll-down" onclick="return false;">
        <i class="fa fa-chevron-down" aria-hidden="true"></i>
      </a>
    </div>

    <div id="main-container">
