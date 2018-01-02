<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package writerblog
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?f5e80312b73a65ac357da81de50aef2e";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-81373872-1', 'auto');
        ga('send', 'pageview');

    </script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'writerblog' ); ?></a>

	<header id="masthead" class="site-header clearfix" role="banner">

		<?php if ( has_nav_menu( 'social' ) ) : ?>
		<nav class="social-navigation clearfix">
			<div class="container">
				<?php wp_nav_menu( array( 'theme_location' => 'social', 'link_before' => '<span class="screen-reader-text">', 'link_after' => '</span>', 'menu_class' => 'menu clearfix', 'fallback_cb' => false ) ); ?>
			</div>
		</nav>
		<?php endif; ?>	

		<div class="branding-wrapper">
			<div class="container">
				<div class="site-branding">
		        <?php if ( get_theme_mod('custom_logo') && get_theme_mod('logo_style', 'hide-title') == 'hide-title' ) : //Show only logo ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>"><img class="site-logo" src="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('custom_logo'))); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" /></a>
		        <?php elseif ( get_theme_mod('logo_style', 'hide-title') == 'show-title' ) : //Show logo, site-title, site-description ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>"><img class="site-logo show-title" src="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('custom_logo'))); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" /></a>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>	        
		        <?php else : //Show only site title and description ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		        <?php endif; ?>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation menu-above" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
				<nav class="mobile-nav"></nav>
			</div>
		</div>

	</header><!-- #masthead -->

	<?php 
	$show_only_front = get_theme_mod('hide_banner', 1);
	if ( is_home() || !$show_only_front ) {
		amadeus_banner();
	}	 

	?>
	
	<div id="content" class="site-content container">
