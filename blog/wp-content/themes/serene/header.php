<?php
/**
 * @package Serene
 * @since Serene 1.0
 */?><!DOCTYPE html>
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />

	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61824107-1', 'auto');
  ga('send', 'pageview');

</script>
	<div id="container">
		<header id="main-header" class="clearfix">
			<h1 id="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
			</h1>
			<nav id="top-menu">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'primary-menu',
					'container'      => '',
					'fallback_cb'    => '',
					'menu_class'     => 'nav',
					'echo'           => true,
				) ); ?>
			</nav>

			<ul id="et-social-icons">
			<?php if ( false !== ( $facebook_url = get_theme_mod( 'facebook_url' ) ) && '' !== $facebook_url ) : ?>
				<li class="et-social-icon et-social-facebook">
					<a href="<?php echo esc_url( $facebook_url ); ?>" target="_blank"><span><?php esc_html_e( 'Facebook', 'Serene' ); ?></span></a>
				</li>
			<?php endif; ?>
			<?php if ( false !== ( $twitter_url = get_theme_mod( 'twitter_url' ) ) && '' !== $twitter_url ) : ?>
				<li class="et-social-icon et-social-twitter">
					<a href="<?php echo esc_url( $twitter_url ); ?>" target="_blank"><span><?php esc_html_e( 'Twitter', 'Serene' ); ?></span></a>
				</li>
			<?php endif; ?>
			<?php if ( false !== ( $google_url = get_theme_mod( 'google_url' ) ) && '' !== $google_url ) : ?>
				<li class="et-social-icon et-social-google">
					<a href="<?php echo esc_url( $google_url ); ?>" target="_blank"><span><?php esc_html_e( 'Google+', 'Serene' ); ?></span></a>
				</li>
			<?php endif; ?>
				<li class="et-search-form">
					<?php get_search_form(); ?>
				</li>
			</ul>

			<?php do_action( 'et_header_top' ); ?>
		</header> <!-- #main-header -->