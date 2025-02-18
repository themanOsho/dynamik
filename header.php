<?php
/**
 * Header Template for Dynamik Theme
 *
 * @package Dynamik
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
	<div class="container">
		<div class="logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php
				if ( has_custom_logo() ) {
					the_custom_logo();
				} else {
					?>
					<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<?php } ?>
			</a>
		</div>
		
		<nav class="main-nav">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_class'     => 'nav-menu',
						'container'      => false,
					)
				);
				?>
			<button class="menu-toggle" aria-label="Toggle Navigation">
				<span></span>
				<span></span>
				<span></span>
			</button>
		</nav>
	</div>
</header>
<?php wp_body_open(); ?>
