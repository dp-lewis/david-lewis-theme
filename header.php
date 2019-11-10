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
<body class="antialiased">
<div>David Lewis</div>
<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>