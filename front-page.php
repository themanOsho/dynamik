<?php
/**
 * Front Page Template for Dynamik Theme
 *
 * @package Dynamik
 */

get_header(); ?>

<main class="site-main container">
	<section class="hero-section">
		<h1><?php esc_html_e( 'Welcome to Dynamik', 'dynamik' ); ?></h1>
		<p><?php esc_html_e( 'A multi-purpose WordPress theme for business, e-commerce, and learning platforms.', 'dynamik' ); ?></p>
		<a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="button">
			<?php esc_html_e( 'Learn More', 'dynamik' ); ?>
		</a>
	</section>
	
	<section class="latest-posts">
		<h2><?php esc_html_e( 'Latest Posts', 'dynamik' ); ?></h2>
		<div class="post-list">
			<?php
			$latest_posts = new WP_Query( array( 'posts_per_page' => 3 ) );
			if ( $latest_posts->have_posts() ) :
				while ( $latest_posts->have_posts() ) :
					$latest_posts->the_post();
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h3 class="post-title">
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h3>
						<div class="post-excerpt">
							<?php the_excerpt(); ?>
						</div>
					</article>
					<?php
				endwhile;
				wp_reset_postdata();
			else :
				echo '<p>' . esc_html__( 'No recent posts available.', 'dynamik' ) . '</p>';
			endif;
			?>
		</div>
	</section>
</main>

<?php get_footer(); ?>