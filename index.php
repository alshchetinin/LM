<?php get_header(); ?>
<section style="min-width:100%;     position: relative; height: auto;">
   <div class="slider" data-slider-speed="<?php the_field('slider-speed', 'option'); ?>">

      <?php

				$slider = get_field('slider', 'option');
				
				if( $slider ): ?>
      <?php foreach( $slider as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
      <?php setup_postdata($post); ?>
      <div class="slider_item grid" style="background-image: url()">
         <img class="slider_item_img" data-flickity-lazyload="<?php the_field('img_slider'); ?>" />
         <div class="slider_item_wrapper">
            <a href="<?php the_permalink(); ?>" class=""></a>
            <h2 class="title">
               <?php the_title(); ?>
            </h2>
            <p class="decription">
               <?php the_field('slider_text'); ?></p>
            <div class="arrow">
               <img src="<?php echo get_template_directory_uri() ?>/img/arrow_slider.svg" alt="">
            </div>
         </div>
      </div>
      <?php endforeach; ?>


      <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
      <?php endif;

				?>

   </div>
   <!-- <div class="slider-navigation grid">
				<div class="dots_wrapper">
					<a href="#" class="dots"></a>
					<a href="#" class="dots"></a>
					<a href="#" class="dots"></a>
					<a href="#" class="dots"></a>
					<a href="#" class="dots"></a>
				</div> -->

   </div>
   </div>
</section>

<section class="what_we_do grid">
   <div class="what_we_do-container">
      <h2 class="title">Что мы делаем</h2>
      <div class="what_we_do-name">
         <a href="/portfolio/#research">Исследования</a>
         <a href="/portfolio/#concept-brands">Концепции брендов </a>
         <a href="/portfolio/#design">Фирменные стили</a>
         <a href="/portfolio/#design">Дизайн упаковки</a>
         <a href="/portfolio/#marketing-and-advertising">Маркетинговые стратегии</a>
         <a href="/portfolio/#marketing-and-advertising">Рекламные компании</a>
         <a href="/portfolio/#sales">Развитие маркетинга и&nbsp;продаж</a>
         <a href="/portfolio/#it-marketing">IT в&nbsp;маркетинге </a>

      </div>
   </div>


</section>
<section class="main grid">
   <div class="section_img">
      <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/big_logo.svg" alt="">
   </div>
   <div class="section_text">
      <h2>Ваш marketplace в&nbsp;маркетинге</h2>
      <p>С нами вы будете выглядеть лучше, зарабатывать больше, развиваться быстрее.</p>
      <a href="/agency">Об агентстве <span><img src="<?php echo get_template_directory_uri() ?>/img/arrow.svg"
               alt=""></span></a>
   </div>
</section>


<?php get_footer(); ?>