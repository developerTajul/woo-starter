<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Woo_Starter
 */

get_header(); ?>

<div class="page-area">
    <div class="container">
        <div class="row">
        	<!-- sidebar starts -->
           <div class="col-sm-3">
				<?php get_sidebar(); ?>
            </div>
			<!-- sidebar ends here -->


			<!-- page er maincontent area starts -->
            <div class="col-sm-9">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content/post', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
           </div> 
			<!-- maincontent area ends here -->

        </div>
    </div>
</div>

<?php

get_footer();
