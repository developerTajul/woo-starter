<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Woo_Starter
 */

get_header(); ?>

<div class="page-area">
    <div class="container">
        <div class="row">
			<!-- sidebar area -->
			<div class="col-sm-3">
				<?php get_sidebar(); ?>
			</div>
			<!-- sidebar area end -->


			<!-- archive content area  -->
			<div class="col-sm-9">

			<?php
			if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header><!-- .page-header -->

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/post/content', get_post_format() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>
			</div> 
			<!-- archive content area end -->
        </div>
    </div>
</div>

<?php
get_footer();
