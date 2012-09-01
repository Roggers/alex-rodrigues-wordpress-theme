<!doctype html>
<html>
<head>
  <meta charset="utf-8">

<title><?php bloginfo('name'); ?>
</title>

  <meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url');
?>" />  

 
  <script src="js/libs/modernizr-2.5.3.min.js"></script>
  <!--[if lt IE 9]> <script src="http://html5shim. ▶
googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body>
  
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <div class="col6" id="container">
    
  <header>
    <div id="col2">
      <h1>
      <a href="<?php bloginfo('url'); ?>">
<img src="<?php print IMAGES; ?>/logo.png" alt="<?php bloginfo('name'); ?>"> </a></h1>
</div>
<?php get_search_form(); ?>
<nav id="navigation" class="col3 chunk">

<?php wp_nav_menu( array('menu' => 'Main', 'container' =>
'nav' )); ?>
</nav>

  </header>
