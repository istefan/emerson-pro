<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Emerson
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'emerson' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			while ( have_posts() ) : the_post();

				// Run the loop for the search to output the results.
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

				the_posts_pagination( array(
					'prev_text'          => __( 'Previous page', 'emerson' ),
					'next_text'          => __( 'Next page', 'emerson' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'emerson' ) . ' </span>',
				) );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
