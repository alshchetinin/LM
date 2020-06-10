<footer class="">
   <section class="action grid">
      <a href="#contact_form_pop" class="fancybox-inline"></a>
      <h2>Получить бесплатную консультацию <span><img class="img-responsive"
               src="<?php echo get_template_directory_uri() ?>/img/arrow_form.svg" alt=""></span></h2>
      <div style="display:none" class="fancybox-hidden">
         <div id="contact_form_pop">
            <?php echo do_shortcode('[contact-form-7 id="99" title="Получите бесплатную консультацию"]'); ?>
         </div>
      </div>

   </section>
   <div class="contact-footer-black"></div>
   <div class="contact contact-footer grid">
      <h1 class="contact-headline">Контакты</h1>
      <div class="contact-adress"><?php the_field('adress', 'option'); ?>
         <div class="contact-social">
            <?php while( have_rows('social', 'option') ): the_row(); 

// переменные
$vk = get_sub_field('vk');
$youtube = get_sub_field('youtube');
$fb = get_sub_field('fb');

?>
            <a href="<?php echo $vk; ?>" target="_blank"><img
                  src="<?php echo get_template_directory_uri() ?>/img/vk.svg" alt="" width="20px"
                  class="vk img-responsive"></a>
            <a href="<?php echo $fb; ?>" target="_blank"><img
                  src="<?php echo get_template_directory_uri() ?>/img/facebook.svg" alt="" width="20px"
                  class="facebook img-responsive"></a>
            <a href="<?php echo $youtube; ?>" target="_blank"><img
                  src="<?php echo get_template_directory_uri() ?>/img/youtube.svg" alt="" width="20px"
                  class="youtube img-responsive"></a>
            <?php endwhile; ?>

         </div>

      </div>
      <div class="contact-time">
         <?php the_field('time_work', 'option'); ?>
         <a href="mailto:<?php the_field('mail', 'option'); ?>" class="mail"><?php the_field('mail', 'option'); ?></a>
         <a href="tel:<?php the_field('phone', 'option'); ?>"
            class="contect-phone"><?php the_field('phone', 'option'); ?></a>

      </div>
      <div class="contact-logo-akar">
         <img src="<?php echo get_template_directory_uri() ?>/img/logo_akar.svg" alt="" class="img-responsive">
      </div>
      <div class="contact-logo-abkr">
         <img src="<?php echo get_template_directory_uri() ?>/img/logo_abkr.svg" alt="" class="img-responsive">
      </div>
   </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>