<?php
/**
 * 404 Error Page Template for Dynamik Theme
 *
 * @package Dynamik
 */

get_header(); ?>

<main class="site-main container">
	<section class="error-404 not-found">
		<h1 class="page-title"> <?php esc_html_e( 'Oops! That page can’t be found.', 'dynamik' ); ?> </h1>
		<p><?php esc_html_e( 'It looks like nothing was found at this location. Try searching or return to the homepage.', 'dynamik' ); ?></p>
		
		<?php get_search_form(); ?>
		
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button">
			<?php esc_html_e( 'Return to Homepage', 'dynamik' ); ?>
		</a>
	</section>
</main>

<?php get_footer(); ?>