<?php get_header(); ?>
<section class="" id="blog-slinge">

   <div class="grid blog-single">
      <div class="title">Блог</div>
      <div class="content-blog">
         <div class="content-blog__top">
            <div class="content-blog__date"><?php the_post(); the_date(); ?></div>

            <div class="content-blog__title"><?php the_title(); ?></div>

            <div class="content-blog__close" onclick="window.history.go(-1); return false;"><img
                  src="<?php echo get_template_directory_uri()?>/img/close-blog.svg" alt=""></div>

         </div>
         <div class="content-blog__img">
            <?php the_post_thumbnail(); ?>
         </div>
         <div class="content-blog__text">
            <?php the_content();?>
         </div>

      </div>


   </div>

</section>

<?php get_footer(); ?>