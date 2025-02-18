<?php
/**
 * Single Post Template for Dynamik Theme
 *
 * @package Dynamik
 */

get_header(); ?>

<main class="site-main container">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1 class="post-title"> <?php the_title(); ?> </h1>
			<div class="post-meta">
				<span class="post-date">
					<?php echo esc_html( get_the_date() ); ?>
				</span>
				<span class="post-author">
					<?php esc_html_e( 'By', 'dynamik' ); ?> <?php the_author_posts_link(); ?>
				</span>
			</div>
			<div class="post-content">
				<?php the_content(); ?>
			</div>
			<div class="post-navigation">
				<?php previous_post_link( '<div class="prev-post">%link</div>', '&larr; Previous Post' ); ?>
				<?php next_post_link( '<div class="next-post">%link</div>', 'Next Post &rarr;' ); ?>
			</div>
			<?php comments_template(); ?>
		</article>
	<?php endwhile; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>