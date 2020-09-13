<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
      conditionizr.config({
          assets: '<?php echo get_template_directory_uri(); ?>',
          tests: {}
      });
    </script>
	</head>
  <body <?php body_class(); ?>>
    <a href="https://www.facebook.com/FHU-EFEKT-SC-1591147137852496" target="_blank" class="fb-logo">
      <img src="https://efekt-zebrzydowice.pl/wp-content/uploads/2020/09/fb-logo.png">
    </a>
    <header class="header-page clear" role="banner">
      <div class="container">
        <div class="row">
          <div class="col-6 col-sm-2">
            <a href="<?php echo home_url(); ?>" class="logo ">
              <img src="<?php echo get_template_directory_uri(); ?>/svg/techtir-logo-light.svg" alt="TechTir - Logo" class="logo-img">
              <img src="<?php echo get_template_directory_uri(); ?>/svg/techtir-logo-square-light.svg" alt="TechTir - Logo" class="logo-img-mobile">
            </a>
          </div>
          <div class="col-6 col-sm-10">
            <nav id="nav" class="nav" role="navigation">
              <?php html5blank_nav(); ?>
            </nav>
            <a id="toggle" class="toggle">
              <span class="hamburger"></span>
            </a>
          </div>
        </div>
      </div>
  </header>

