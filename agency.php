<?php
/*
Template Name: Агентство
*/
?>

<?php get_header(); ?>
<div class="agency-bg" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/bg_agency.jpg)">
</div>
<div class="agency grid">
   <div class="agency-preview">
      <div class="agency-preview-headline">
         <h2 class="title"><?php the_field('headline')?></h2>
         <div class="description">
            <?php the_field('text_red')?>
         </div>
      </div>
      <div class="agency-preview-numbers">
         <div class="title"><?php the_field('headline_2')?></div>
         <?php while( have_rows('numbers') ): the_row(); 

				// переменные
				$number = get_sub_field('number');
				$text = get_sub_field('text');	

				?>
         <div class="agency-preview-numbers__item">
            <h2><?php echo $number;?></h2>
            <p><?php echo $text;?></p>
         </div>
         <?php endwhile; ?>
      </div>
   </div>
   <div class="agency-reason">
      <div class="title_wrapper">
         <h2 class="title"><?php echo count(get_field('reason' ))  ?> причин <br> работать с нами</h2>

      </div>


      <?php if( have_rows('reason') ): ?>
      <div class="agency-reason__items">

         <?php while( have_rows('reason') ): the_row(); 

	// переменные
	$headline = get_sub_field('headline');
	$text = get_sub_field('text');	

	?>



         <div class="agency-reason__item">
            <div class="headline_wrapper">
               <h3><?php echo $headline;?></h3>
            </div>
            <p><?php echo $text; ?></p>
         </div>

         <?php endwhile; ?>

         <?php endif; ?>



      </div>

   </div>

   <div class="agency-clients">
      <div class="title">Наши клиенты</div>

      <div class="agency-clients_logo">
         <?php while( have_rows('logo') ): the_row(); 

				// переменные
				$logo = get_sub_field('logo');
				?>

         <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt'] ?>" class="img-responsive">

         <?php endwhile; ?>
      </div>
   </div>
</div>

<?php get_footer(); ?>