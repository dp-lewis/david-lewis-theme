<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8" />
 	<title><?php wp_title( '|', true, 'right' ); ?> David Lewis</title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<div>David Lewis</div>
<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>