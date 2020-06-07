<?php get_header(); ?>
<section style="min-width:100%;     position: relative; height: auto;">
   <div class="slider" data-slider-speed="<?php the_field('slider-speed', 'option'); ?>">

      <?php

				$slider = get_field('slider', 'option');
				
				if( $slider ): ?>
      <?php foreach( $slider as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
      <?php setup_postdata($post); ?>
      <div class="slider_item grid" style="background-image: url()">
         <img class="slider_item_img" data-flickity-lazyload="<?php the_field('img_slider'); ?>"
            alt="Портфолио http://lovemarketing.ru/" />
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
         <a href="/portfolio/#marketing-and-advertising">Рекламные кампании</a>
         <a href="/portfolio/#sales">Развитие маркетинга и&nbsp;продаж</a>
         <a href="/portfolio/#it-marketing">IT в&nbsp;маркетинге </a>

      </div>
   </div>


</section>
<section class="main grid">
   <!-- <div class="section_img">
      <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/big_logo.svg" alt="">
   </div> -->
   <div class="section-logo-partner">
      <?php while( have_rows('logos', 'option') ): the_row(); 

				// переменные
				$logo = get_sub_field('logo');
				?>

      <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt'] ?>" class="img-responsive">

      <?php endwhile; ?>
   </div>
   <div class="section_text">
      <h2>Ваш marketplace в&nbsp;маркетинге</h2>
      <p>С нами вы будете выглядеть лучше, зарабатывать больше, развиваться быстрее.</p>
      <a href="/agency">Об агентстве <span><img src="<?php echo get_template_directory_uri() ?>/img/arrow.svg"
               alt=""></span></a>
   </div>
</section>


<?php 
$link = get_field('pdf-presentation-link', 'option');
if( !empty( $link ) ): ?>
<section id="main-project-link">
   <div class="grid main-project-link">
      <div class="favorite-works-bg">
         <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/logo-works.svg" alt="logo">
      </div>
      <div class="favorite-works">
         <a href="/portfolio"></a>
         <div>
            <h3 class="title">Избранные<br>работы</h3>
            <img src="<?php echo get_template_directory_uri() ?>/img/arrow_slider.svg" alt="arrow">
         </div>

         <div class="favorite-works-bg favorite-works-bg-mobile">
            <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/logo-works.svg" alt="logo">
         </div>
      </div>
      <div class="all-works-bg">
         <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/pdf.svg" alt="logo">
      </div>
      <div class="all-works">
         <div>
            <h3 class="title">Все<br>проекты </h3>
            <img src="<?php echo get_template_directory_uri() ?>/img/arrow_slider.svg" alt="arrow">
         </div>
         <a href="<?php echo $link?>"></a>
         <div class="all-works-bg all-works-bg-mobile">
            <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/pdf.svg" alt="logo">
         </div>
      </div>
   </div>
</section>
<?php endif; ?>



<seciton id="main-form">
   <div class="grid main-form">
      <div class="main-form__text">
         <h3 class="title">Получите бесплатную <br>консультацию </h3>
         <p>Заполните поля справа, и мы с вами обязательно свяжемся</p>
      </div>
      <div class="main-form__contact">
         <?php echo do_shortcode('[contact-form-7 id="722" title="Получите бесплатную консультацию_copy"]'); ?>
      </div>
      <div class="line"></div>
   </div>
</seciton>

<?php get_footer(); ?>