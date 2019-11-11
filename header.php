<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8" />

	 <link
      href="https://fonts.googleapis.com/css?family=Raleway|Roboto+Slab&display=swap"
      rel="stylesheet"
    />
	 <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?> David Lewis</title>
	<?php wp_head(); ?>
</head>
<body class="antialiased pb-24 bg-gray-200 max-w-3xl m-auto">
<nav class="fixed z-10 w-full bottom-0 left-0 flex items-center justify-center text-white">
  <a href="/" class="p-4 md:p-8 hover:bg-blue-600">Home</a>
  <a href="/#dev" class="p-4 md:p-8 hover:bg-blue-600">Dev & Design</a>
  <a href="/#community" class="p-4 md:p-8 hover:bg-blue-600">Community</a>
</nav>

<?php 
// wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
 ?>