<div class="container">
 <div class="row justify-content-center">
    <div class="col-4">
      <h1>Our Products</h1>
    </div>
  </div>
  <?php echo do_shortcode('[products]'); ?>
</div>


<?php

/**
 $args = array(
     'post_type' => 'product',
    'posts_per_page' => 12,
    'tax_query' => array(
            array(
                'taxonomy' => 'product_visibility',
                'field'    => 'name',
                'terms'    => 'featured',
            ),
        ),
    );
$loop = new WP_Query( $args );
if ( $loop->have_posts() ) {
    while ( $loop->have_posts() ) : $loop->the_post();
        wc_get_template_part( 'content', 'product' );
    endwhile;
} else {
    echo __( 'No products found' );
}
wp_reset_postdata();


// Sales Product Query

$args = array(
  'post_type'      => 'product',
  'meta_query'     => array(
      'relation' => 'OR',
      array( // Simple products type
          'key'           => '_sale_price',
          'value'         => 0,
          'compare'       => '>',
          'type'          => 'numeric'
      ),
      array( // Variable products type
          'key'           => '_min_variation_sale_price',
          'value'         => 0,
          'compare'       => '>',
          'type'          => 'numeric'
      )
  )
);

*/