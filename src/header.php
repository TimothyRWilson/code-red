<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MNH87GT');</script>
<!-- End Google Tag Manager -->

<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>

<link href="//www.google-analytics.com" rel="dns-prefetch">

<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/favicons/favicon.ico" rel="shortcut icon">
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/favicons/touch.png" rel="apple-touch-icon-precomposed">

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php bloginfo( 'description' ); ?>">
<meta name="keywords" content="global, it-services, blockchain">
<meta content="dM-h-YTHjBR-epzJpLtSwBH_jOHrtosZj4EUpwjS3as" name="google-site-verification">
<!-- Social Media Metatags -->
<link href="https://www.kompitech.com/" rel="canonical">
<meta content="en_US" property="og:locale">
<meta content="website" property="og:type">
<meta content="IT Solutions and Services - KompiTech" property="og:title">
<meta content=
"IT Solutions and Services focusing on blockchain technology"
property="og:description">
<meta content="https://www.kompitech.com/" property="og:url">
<meta content="https://www.kompitech.com/assets/images/ktech-logo.png" property="og:image">
<meta content="IT Solutions and Services" property="og:site_name">

<!-- cookie cdn -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>

<!-- Disable tap highlight on IE -->
<meta name="msapplication-tap-highlight" content="no">

<!-- TODO: Load fontawesome locally -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MNH87GT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <!-- wrapper -->
  <div class="wrapper">

   <!-- header -->
   <header class="header fixed-top" id="header">
    <nav class="kt-navbar h-100 container-fluid">
      <div class="row h-100 align-items-center justify-content-between">
        <div class="col-4 col-lg-3">
          <a class="header-logo" href="<?php echo esc_url( home_url() ); ?>" class="float-left">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ktech-logo.svg" alt="" class="img-fluid">
          </a>
        </div>
        <div class="col-lg-7 d-none d-lg-flex justify-content-lg-end justify-content-xl-end t-nav-links">

         <?php if (is_home()): ?>

          <a class="kompi-text" href="#section-2">IT Services</a>
          <a class="kompi-text" href="#section-3">Our Technology</a>
          <a class="kompi-text" href="/partners">Partner Ecosystem</a>
          <a class="kompi-text" href="https://medium.com/kompitech">Blog</a>
          <a class="kompi-text" href="https://portal.kompitech.com/tickets/ts/login/?next=/tickets/ts/dashboard_v2/"><span class="fas fa-user"></span></a>
          <?php else: ?>

            <a class="kompi-text" href="<?php echo esc_url( home_url() ); ?>">Home</a>
            <a class="kompi-text" href="/partners">Partner Ecosystem</a>
            <a class="kompi-text" href="https://medium.com/kompitech">Blog</a>
            <a class="kompi-text" href="https://portal.kompitech.com/tickets/ts/login/?next=/tickets/ts/dashboard_v2/"><span class="fas fa-user"></span></a>

          <?php endif ?>

        </div>
        <div class="col-6 col-lg-2 d-flex btn-container justify-content-center">
          <a href="/contact-us"  class="btn btn-cta" style="font-weight: 200;">Schedule a Call 
            <i class="fa fa-phone"></i>
          </a>
        </div>
        <div class="col-2 d-lg-none">
          <div id="nav-icon" class="float-right">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>


        <!--//.col-4-->
      </div>
      <!--//.row-->
    </nav>
    <!--//.container-fluid-->
    <section id="overlay">
     <div class="container-fluid h-100">
      <div class="row h-100 align-items-center" id="displayNav">

        <!-- //.confirmations -->
        <div class="col-12 o-nav-links text-left d-flex flex-column justify-content-start pl-0" id="oNav">
         <?php if ( is_home() ): ?>
         <a class="kompi-text ml-lg-4 p-3" href="#section-2">IT Services</a>
         <a class="kompi-text ml-lg-4 p-3" href="#section-3">Our Technology</a>
         <a class="kompi-text ml-lg-4 p-3" href="/partners">Partner Ecosystem</a>
         <a class="kompi-text ml-lg-4 p-3" href="https://medium.com/kompitech">Blog</a>
         <a class="kompi-text ml-lg-4 p-3" href="https://portal.kompitech.com/tickets/ts/login/?next=/tickets/ts/dashboard_v2/"><span class="fas fa-user"></span></a>
         <?php else: ?>
         <a class="kompi-text ml-lg-4 p-3" href="<?php echo esc_url( home_url() ); ?>">Home</a>
         <a class="kompi-text ml-lg-4 p-3" href="/partners">Partner Ecosystem</a>
         <a class="kompi-text ml-lg-4 p-3" href="https://medium.com/kompitech">Blog</a>
         <a class="kompi-text ml-lg-4 p-3" href="https://portal.kompitech.com/tickets/ts/login/?next=/tickets/ts/dashboard_v2/"><span class="fas fa-user"></span></a>
         
         <?php endif ?>
       </div>
       <!-- //.o-nav-links -->
     </div>
     <!-- //.row -->
   </div>
   <!-- //.container-fluid -->
 </section>
 <!-- //#overlay -->
</header>
<!-- TODO: Find some better way to integrate this  -->
<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>
<!-- /header -->
