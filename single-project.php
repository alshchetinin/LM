<?php get_header(); ?>


<div class="projectPage-bg"></div>
<div class="projectPage grid">

<div class="projectPage-container">
	<div class="projectPage-preview">		
		<h1 class="title">
		<?php the_title(); ?>
			</h1>
			<div class="description">
				<?php the_field('text')?>
			</div>
	</div>

	<div class="projectPage-content">
	<?php the_post();the_content(); ?>	</div>


</div>


</div>
	<div class="projectPage-bottom grid">

	<?php 		  	
	$pred_post = get_adjacent_post();		
		  if ($pred_post) {
			 // получили и записали в переменную объект предыдущего поста
			$pred_img = get_field('img_slider', $pred_post->ID);
			$pred_premalink = get_permalink($pred_post->ID);
			$pred_title = get_the_title($pred_post->ID);
		} else {
			$last = new WP_Query('post_type=project', 'posts_per_page=1&order=DESC');
			$last->the_post();
			$pred_img = get_field('img_slider', $last->ID);
			$pred_premalink = get_permalink($last->ID);
			$pred_title = get_the_title($last->ID);
			wp_reset_postdata();
		};

		$next_post = get_adjacent_post(0, '', 0);
		if ($next_post) {			
			$next_img = get_field('img_slider', $next_post->ID);
			$next_premalink = get_permalink($next_post->ID);
			$next_title = get_the_title($next_post->ID);
		} else {
			$args = array(
				'posts_per_page'      => 1,
				'orderby'          => 'post_date',
				'order'            => 'ASC',
				'post_type'        => 'project'
			 ); 
			$first = new WP_Query($args);
			$first->the_post();
			$next_img = get_field('img_slider', $first->ID);
			$next_premalink = get_permalink($first->ID);
			$next_title = get_the_title($first->ID);
			wp_reset_postdata();
		};






		?>

		<a href="<?php echo $pred_premalink ?>" class="projectPage-bottom-prev-BG-href"></a>
		<div class="projectPage-bottom-prev-BG" style="background-image: url(<?php echo $pred_img ?>)"></div>
		<div class="projectPage-bottom-prev">
			<a href="<?php echo $pred_premalink?>"></a>
			<p>предыдущий проект</p>
			<h3 class="title"><?php echo $pred_title ?></h3>
			<img src="<?php echo get_template_directory_uri() ?>/img/arrow_slider.svg" alt="">
		</div>


		<div class="projectPage-bottom-next-BG sad" style="background-image: url(<?php echo $next_img ?>)"></div>
		<a href="<?php echo $next_premalink ?>" class="projectPage-bottom-next-BG-href"></a>
		<div class="projectPage-bottom-next">
		<a href="<?php echo $next_premalink ?>"></a>
			<p>следующий проект</p>
			<h3 class="title"><?php echo $next_title ?></h3>
			<img src="<?php echo get_template_directory_uri() ?>/img/arrow_slider.svg" alt="">
		</div>
	</div>



<?php get_footer(); ?> 