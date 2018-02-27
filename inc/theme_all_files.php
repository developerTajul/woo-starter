<?php 

/**
*
* @Theme All css, js and conditional js files
*
*
*/

add_action('wp_enqueue_scripts', 'comet_theme_all_files');

function comet_theme_all_files(){

	/**
	*
	* all css files
	*/
	wp_enqueue_style('comet-bundle', get_template_directory_uri().'/assets/css/bundle.css', array(), '1.0.1', 'all');

	wp_enqueue_style('comet-style', get_template_directory_uri().'/assets/css/style.css', array(), '1.0.2', 'all');

	wp_enqueue_style('comet-fonts', get_comet_fonts() );

	


	/**
	* all js files
	*
	*/

	wp_enqueue_script('comet-bundle', get_template_directory_uri().'/assets/js/bundle.js', array('jquery'), '3.0.1', true);

	wp_enqueue_script('comet-maps', '//maps.googleapis.com/maps/api/js?v=3.exp', array('jquery'), '3.0.2', true);

	wp_enqueue_script('comet-', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '3.0.3', true);

	
	/**
	*
	* conditional js files
	*
	*/
	wp_enqueue_script('comet-html5shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
	wp_script_add_data('comet-html5shim', 'conditional', 'lt IE 9');


	wp_enqueue_script('comet-respond', 'https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js');
	wp_script_add_data('comet-respond', 'conditional', 'lt IE 9');


}




/**
*
* admin inline js
* for post format	
*
*/
add_action('admin_print_scripts', 'comet_inline_js', 1000);

function comet_inline_js(){

	if( get_post_type() === 'post'): ?>
		<script type="text/javascript">
			jQuery(document).ready(function(){


				$id = jQuery('input[name="post_format"]:checked').attr('id');

				// video
				if( $id == 'post-format-video'){
					jQuery('.cmb2-id-video-link').show();
				}else{
					jQuery('.cmb2-id-video-link').hide();
				}

				// audio
				if( $id == 'post-format-audio'){
					jQuery('.cmb2-id-audio-link').show();
					
				}else{
					jQuery('.cmb2-id-audio-link').hide();
				}

				// gallery
				if( $id == 'post-format-gallery'){
					jQuery('.cmb2-id-gallery-images').show();
					
				}else{
					jQuery('.cmb2-id-gallery-images').hide();
				}


				// quote
				if( $id == 'post-format-quote'){
					jQuery('.cmb2-id-quote-text').show();
					
				}else{
					jQuery('.cmb2-id-quote-text').hide();
				}


				/**
				*
				* 2nd step
				*
				*/
				jQuery('input[name="post_format"]').change(function(){

					

					$id = jQuery('input[name="post_format"]:checked').attr('id');

					// video
					if( $id == 'post-format-video'){
						jQuery('.cmb2-id-video-link').show();
					}else{
						jQuery('.cmb2-id-video-link').hide();
					}

					// audio
					if( $id == 'post-format-audio'){
						jQuery('.cmb2-id-audio-link').show();
						
					}else{
						jQuery('.cmb2-id-audio-link').hide();
					}

					// gallery
					if( $id == 'post-format-gallery'){
						jQuery('.cmb2-id-gallery-images').show();
						
					}else{
						jQuery('.cmb2-id-gallery-images').hide();
					}

					// quote
					if( $id == 'post-format-quote'){
						jQuery('.cmb2-id-quote-text').show();
						
					}else{
						jQuery('.cmb2-id-quote-text').hide();
					}


				});


			});	
		</script>

	<?php endif; 
 
}
