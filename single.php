<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Woo_Starter
 */

get_header(); ?>

<div class="page-area">
    <div class="container">
        <div class="row">
			<!-- sidebar starts here -->
           <div class="col-sm-3">
				<?php get_sidebar(); ?>
            </div>
			<!-- sidebar ends here -->

			<!-- maincontent here -->
            <div class="col-sm-9">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_type() );

					the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

           </div> 
           	<!-- maincontent here -->		
        </div>
    </div>
</div>

<?php
get_footer();
