<?php
/**
 * Sidebar Template for Dynamik Theme
 *
 * @package Dynamik
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
	<aside class="site-sidebar">
		<div class="container">
			<?php dynamic_sidebar( 'main-sidebar' ); ?>
		</div>
	</aside>
<?php endif; ?>
