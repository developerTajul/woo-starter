<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Woo_Starter
 */

get_header(); ?>

<div class="page-area">
    <div class="container">
        <div class="row">
        	<!-- sidebar area starts here -->
           <div class="col-sm-3">
				<?php get_sidebar(); ?>
            </div>
			<!-- sidebar area ends here -->

			<!-- search page er maincontent starts here -->
            <div class="col-sm-9">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'woo-starter' ), '<span>' . get_search_query() . '</span>' );
				?></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content/post', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content/post', 'none' );

		endif; ?>

           </div> 
			<!-- maincontent ends here -->

        </div>
    </div>
</div>

<?php
get_footer();
