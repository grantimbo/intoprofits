<!doctype html>
<html <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">

		<?php if ( is_front_page() ) : ?>
			<title><?php bloginfo('name'); ?> &mdash; <?php bloginfo('description'); ?></title>
		<?php else : ?>
			<title><?php bloginfo('name'); ?> &mdash; <?php wp_title(''); ?></title>
		<?php endif; ?>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/icon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		
		<!-- Hydros Tracker -->
		<script async defer crossorigin="anonymous" src="https://177233.tracking.hyros.com/v1/lst/universal-script?ph=aef7d03285e251124713a4ad35adb15aca7a4784eab242cdfe765ab0ec9882eb&tag=!hyros"></script>
		
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-W222V36');</script>
		<!-- End Google Tag Manager -->

		<meta name="google-site-verification" content="2SxUK6nDEpSYTdd6W35dgzkCDSPeJhijLISGo1c9dUw" />
		
		<!-- Facebook Tracker -->
		<script>
			window.fbAsyncInit = function() {
				FB.init({
				appId            : '153590798408172',
				autoLogAppEvents : true,
				xfbml            : true,
				version          : 'v9.0'
				});
			};
		</script>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
		<!-- End Facebook SDK -->

		<?php wp_head(); ?>
		
	</head>
	<body <?php body_class(); ?>>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W222V36"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->

		<header class="header clear">
			<div class="wrap">
				<div class="mobile-menu-wrap">
					<header class="header clear">
					<a class="icon-cross mobile-menu" href="#" rel="nofollow"></a>
					<a class="logo" href="<?php echo site_url(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/img/logo-black.webp" alt="Into Profits" width="200" height="23"></a>
					<?php head_nav(); ?>
					</header>
				</div>
				<a class="icon-menu mobile-menu" href="#" rel="nofollow"></a>
				<a class="logo" href="<?php echo site_url(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/img/logo-black.webp" alt="Into Profits" width="200" height="23"></a>
				<div class="desktop-menu-wrap">
					<?php head_nav(); ?>
				</div>
			</div>
		</header>