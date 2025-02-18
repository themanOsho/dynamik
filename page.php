<?php
/**
 * Page Template for Dynamik Theme
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
			<h1 class="page-title"> <?php the_title(); ?> </h1>
			<div class="page-content">
				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>