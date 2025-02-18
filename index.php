<?php
/**
 * Index Template for Dynamik Theme
 *
 * @package Dynamik
 */

get_header(); ?>

<main class="site-main container">
	<?php if ( have_posts() ) : ?>
		<div class="post-list">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h2 class="post-title">
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h2>
					<div class="post-meta">
						<span class="post-date">
							<?php echo esc_html( get_the_date() ); ?>
						</span>
						<span class="post-author">
							<?php esc_html_e( 'By', 'dynamik' ); ?> <?php the_author_posts_link(); ?>
						</span>
					</div>
					<div class="post-excerpt">
						<?php the_excerpt(); ?>
					</div>
					<a href="<?php the_permalink(); ?>" class="read-more">
						<?php esc_html_e( 'Read More', 'dynamik' ); ?>
					</a>
				</article>
			<?php endwhile; ?>
		</div>
		
		<div class="pagination">
			<?php the_posts_pagination(); ?>
		</div>
	<?php else : ?>
		<p><?php esc_html_e( 'No posts found.', 'dynamik' ); ?></p>
	<?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
