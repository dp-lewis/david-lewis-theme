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
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-11491148-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-11491148-1');
  </script>
</head>
<body class="antialiased pb-24 bg-gray-200">
<nav class="fixed md:relative z-10 w-full bottom-0 left-0 flex items-center justify-center text-white">
  <a href="/" class="p-4 hover:bg-blue-600">Home</a>
  <a href="/#dev" class="p-4 hover:bg-blue-600">Dev & Design</a>
  <a href="/#community" class="p-4 hover:bg-blue-600">Community</a>
</nav>