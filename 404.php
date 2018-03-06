<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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

			<!-- 404 not found content area -->
			<div class="col-sm-9">
				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'woo-starter' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'woo-starter' ); ?></p>
					</div><!-- .page-content -->
				</section><!-- .error-404 -->
			</div> 

        </div>
    </div>
</div>

<?php
get_footer();
