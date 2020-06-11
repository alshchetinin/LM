<?php
/*
Template Name: Блог
*/
?>

<?php get_header(); ?>

<section class="" id="blog-page">

   <div class="grid blog-page">
      <div class="title">Блог</div>
      <div class="blog-items">
         <?php
         global $post;
         $args = array( 'posts_per_page' => -1, );
         $myposts = get_posts( $args );
         foreach( $myposts as $post ){ setup_postdata($post);
            ?>

         <article class="blog-item">
            <a href="<?php the_permalink(); ?>"></a>
            <div class="blog-item__date"><?php the_date(); ?></div>
            <div class="blog-item__title"><?php the_title(); ?></div>
            <div class="blog-item__arrow"><img src="<?php echo get_template_directory_uri()?>/img/arrow-blog.svg"
                  alt="">
            </div>

         </article>




         <?php
         }
         wp_reset_postdata();
         ?>



      </div>

   </div>

</section>

<?php get_footer(); ?>