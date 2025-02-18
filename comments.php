<?php
/**
 * Comments Template for Dynamik Theme
 *
 * @package Dynamik
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			/* translators: %1$s: Number of comments. */
			printf(
				esc_html( _n( 'One comment', '%1$s comments', get_comments_number(), 'dynamik' ) ),
				esc_html( number_format_i18n( get_comments_number() ) )
			);
			?>
		</h2>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 50,
				)
			);
			?>
		</ol>

		<?php the_comments_navigation(); ?>
	<?php endif; ?>

	<?php if ( ! comments_open() ) : ?>
		<p class="no-comments"> <?php esc_html_e( 'Comments are closed.', 'dynamik' ); ?> </p>
	<?php endif; ?>

	<?php comment_form(); ?>
</div>
