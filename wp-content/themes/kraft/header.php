<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kraft
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css' />

<?php // Share This ?>
<script type="text/javascript">      var switchTo5x = true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">    stLight.options({ publisher: "ur-a7b87f43-aa4f-9781-baad-196c17871add" }); </script>
<script type="text/javascript">    stLight.options({ publisher: "ur-a559d0eb-238d-964-c60b-59cb7402bb32", onhover: false }); </script>
<?php // End Share This ?>

<?php wp_head(); ?>
</head>

<body <?php body_class( 'body-main' ); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kraft' ); ?></a>

	<header id="page-header" class="site-width" role="banner">
		<a href="/" rel="home">
            <img src="<?php print get_template_directory_uri(); ?>/images/head-title.jpg">
        </a>
    </header><!-- #masthead -->

    <div id="menu-nav">
    	<div class="site-width">
    		<?php // Left primary nav ?>
    		<div class="left-menu site-width">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'kraft' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</div>

			<?php // Right primary nav ?>
			<div class="right-menu">
                <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu' ) ); ?>
            </div>
		</div><!-- #site-width -->
	</div><!-- #menu-nav -->

	<div id="content" class="content site-width">
