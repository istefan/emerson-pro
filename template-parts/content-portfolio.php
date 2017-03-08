<?php
/**
 * Template part for displaying single portfolio posts.
 *
 * @link https://codex.wordpress.org/Post_Type_Templates
 *
 * @package Emerson
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php the_post_thumbnail( 'portfolio-thumbnail', array( 'class' => 'portfolio-thumbnail' ) ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'emerson' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_post_meta( get_the_ID(), 'hide_footer', true ) != 1 ) : ?>
	<footer class="entry-footer">
		<?php emerson_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
