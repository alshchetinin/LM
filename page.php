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

	<div class="projectPage-content" style="background: #fff; padding: 40px;">
	<?php the_post();the_content(); ?>	</div>


</div>


</div>
<?php get_footer(); ?>
