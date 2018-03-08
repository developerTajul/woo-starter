<?php 

add_shortcode('comet_homepage_category', 'comet_homepage_category_shortcode');

function comet_homepage_category_shortcode($atts, $content){
	extract( shortcode_atts(array(
		'title'		=> 'Hellow Academy',
		'cat_count'	=> 6,
		'cat_name'	=> 'best-selling'
	), $atts));
	ob_start(); ?>



<div class="main-product-area one">
    <div class="container">
        <div class="row section-title-rapper">
            <div class="col-sm-12">
                <h2 class="section-title"><span><?php echo $title; ?></span></h2>
            </div>
            <!-- section-title -->
        </div>
        <!-- end section title rapper -->

        <div class="row product-list--1">
            <div class="col-sm-12">
                <ul class="product-parenrt">
       <?php 
        $q = new WP_Query(array(
            'post_type'     => 'product',
            'posts_per_page'    => $cat_count,
            'product_cat' => $cat_name
        ));

        while( $q->have_posts() ):$q->the_post();
        $product_name_bangla = get_post_meta(get_the_id(), 'product-name-bangla', true); 
        global $product;
        ?>


                    <li class="single-main-product">
                        <div class="product-thubm">
                            <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/main-product/main-pro.jpg" alt=""></a>
                            <div class="thub-icon">
                                <a href="#"><i class="icofont icofont-heart"></i></a>
                            </div>
                        </div>
                        <!-- end product thumb -->
                        <div class="product-text">
                            <h4><?php the_title(); ?></h4>
                            <h5><?php echo $product_name_bangla; ?></h5>
                            <h6><span class="item--price"><i class="icofont icofont-cur-taka"></i>270</span> <del><i class="icofont icofont-cur-taka"></i>320</del> </h6>
                        </div>



                        <!-- end product text -->
                        <div class="product-hover">
                            <?php 
                                echo apply_filters( 'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
                                    sprintf( '<a href="%s" data-quantity="%s" class="%s" %s><i class="icofont icofont-cart-alt"></i></a>',
                                        esc_url( $product->add_to_cart_url() ),
                                        esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
                                        esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
                                        isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
                                        esc_html( $product->add_to_cart_text() )
                                    ),
                                $product, $args );

                            ?>

                        </div>
                    </li>






                    <!-- end single product -->
        <?php endwhile; ?>





                </ul>
                <div class="load-more-option text-center">
                    <a href="#" id="loadMore" class="btn-mr">Load More</a>
                </div>
                <!-- load more option -->
            </div>
        </div>
    
        <!-- end product row -->

    </div>

</div>


	<?php return ob_get_clean();
}