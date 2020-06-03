<?php
/*
Template Name: Проекты
*/
?>

<?php get_header(); ?>

<section class="project grid">
   <div class="fillter">
      <?php 
	$terms_product_cat = get_terms( array(
        'post_type' => 'product',
        'hide_empty' => false,
        'orderby' => 'id',
		'taxonomy' => 'category'
	) );
	if ( ! empty( $terms_product_cat ) ) {
	?>
      <?php foreach ( $terms_product_cat as $key => $product_cat ) { ?>
      <a class="fillter__item <?php if ( $key == 0 ) echo 'fillter__item-active'; ?>"
         href="#<?php echo $product_cat->slug ; ?>"
         data-tab="<?php echo $product_cat->slug ; ?>"><?php echo $product_cat->name; ?></a>
      <?php } ?>


   </div>
   <div class="project_content">
      <?php foreach ( $terms_product_cat as $key => $product_cat ) { ?>

      <div class="project_content_tab <?php if ( $key == 0 ) echo 'project_content_tab-active'; ?>"
         id="<?php echo $product_cat->slug; ?>" data-tab="<?php echo $product_cat->slug ; ?>">
         <?php
				$mypost = array( 'post_type' => 'project', 'category' => $product_cat->term_id );
				$products = get_posts( $mypost );
				?>
         <?php foreach ( $products as $post ) { setup_postdata( $post ); 
                    $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                    ?>
         <div class="project_item" style="background-image: url()">

            <div class="project_item_overlay">
               <h2><?php the_title(); ?></h2>
               <p class="decription">
                  <?php the_field('slider_text'); ?></p>
               <div class="arrow"><img class="img-responsive"
                     src="<?php echo get_template_directory_uri() ?>/img/arrow_project.svg" alt=""></div>
            </div>
            <a href="<?php the_permalink()?>"></a>
            <picture class="img-responsive">
               <source class="img-responsive" srcset="<?php the_field('img_desktop'); ?>" media="(min-width: 720px)">
               <source class="img-responsive" srcset="<?php the_field('img_mobile'); ?>" media="(max-width: 720px)">
               <img class="img-responsive" src="<?php the_field('img_desktop'); ?>"
                  alt="<?php the_title(); ?> | <?php the_field('slider_text'); ?>">
            </picture>
         </div>
         <?php } wp_reset_postdata(); ?>
      </div>
      <?php } ?>
   </div>
   <?php } ?>
   </div>
   </div>
</section>
<?php get_footer(); ?>