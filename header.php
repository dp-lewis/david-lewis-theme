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

<div class="fixed md:relative z-10 w-full bottom-0 left-0">
  <nav class="flex items-center justify-center text-white">
      <a href="/#dev" class="p-4 hover:bg-blue-600">Dev & Design</a>
    <a href="/" class="m-2">
  <svg class="border" width="40" height="40" viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="favicon">
              <g id="Group">
                  <rect id="Rectangle" fill="#4299E1" x="0" y="0" width="512" height="512"></rect>
                  <rect id="Rectangle" fill="#FFFFFF" x="239" y="128" width="65" height="255"></rect>
                  <rect id="Rectangle" fill="#FFFFFF" x="377" y="128" width="65" height="190"></rect>
                  <path d="M71,155 C133.960461,155 185,199.771525 185,255 C185,310.228475 133.960461,355 71,355 L71,355 Z" id="Combined-Shape" fill="#FFFFFF"></path>
              </g>
          </g>
      </g>
    </svg>
    </a>

    <a href="/#community" class="p-4 hover:bg-blue-600">Community</a>
  </nav>
</div>  