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
			<a href="<?php echo esc_url(home_url('/')); ?>">
                <?php 
                $dynamik_logo = get_theme_mod('dynamik_logo');
                if ( $dynamik_logo ) {
                    echo '<img src="' . esc_url( $dynamik_logo ) . '" alt="' . esc_attr( get_bloginfo('name') ) . '">';
                } else { 
                    echo '<h1 class="site-title">' . esc_html( get_bloginfo('name') ) . '</h1>';
                } 
                ?>
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
