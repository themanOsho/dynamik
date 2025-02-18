<?php
/**
 * Footer Template for Dynamik Theme
 *
 * @package Dynamik
 */

?>

<footer class="site-footer">
	<div class="container">
		<div class="footer-widgets">
			<?php if ( is_active_sidebar( 'footer-widget-1' ) ) : ?>
				<div class="footer-widget">
					<?php dynamic_sidebar( 'footer-widget-1' ); ?>
				</div>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'footer-widget-2' ) ) : ?>
				<div class="footer-widget">
					<?php dynamic_sidebar( 'footer-widget-2' ); ?>
				</div>
			<?php endif; ?>
		</div>

		<div class="footer-bottom">
			<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>. All rights reserved.</p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>